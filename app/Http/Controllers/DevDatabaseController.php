<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Local-only schema/data browser for the sqlsrv connection. Not for
 * production use — the source tables contain PII (Aadhaar numbers,
 * mobile numbers, owner names), so this is hard-blocked outside
 * app()->isLocal() in addition to the route only being registered locally.
 */
class DevDatabaseController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        if (! app()->isLocal()) {
            throw new NotFoundHttpException;
        }

        $table = $request->query('table');

        if ($table === null) {
            $tables = DB::select(
                "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' ORDER BY TABLE_NAME"
            );

            return response()->json([
                'connection' => config('database.default'),
                'database' => config('database.connections.'.config('database.default').'.database'),
                'tables' => array_map(fn ($row) => $row->TABLE_NAME, $tables),
                'usage' => '?table=TableName        -> columns + sample rows'.PHP_EOL
                    .'?table=TableName&limit=50 -> up to 100 sample rows (default 20)',
            ]);
        }

        if (! Schema::hasTable($table)) {
            return response()->json(['error' => "Table [{$table}] not found."], 404);
        }

        $limit = min((int) $request->query('limit', 20), 100);

        return response()->json([
            'table' => $table,
            'columns' => Schema::getColumnListing($table),
            'row_count' => DB::table($table)->count(),
            'sample_rows' => DB::table($table)->limit($limit)->get(),
        ]);
    }
}
