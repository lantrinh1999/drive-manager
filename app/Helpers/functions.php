<?php

if (!function_exists('test')) {
    function test()
    {
        return 'test';
    }
}

if (!function_exists('download')) {
    function download($filename, $dir = '/', $recursive = false)
    {
        if ($dir == null) {
            $dir = '/';
        }
        // Có lấy file trong các thư mục con không?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        $file = $contents
            ->where('type', '=', 'file')
            ->where('basename', '=', ($filename))
            // ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // có thể bị trùng tên file với nhau!
        $rawData = Storage::cloud()->get($file['path']);
        return response($rawData, 200)
            ->header('Content-Type', $file['mimetype'])
            ->header('Content-Disposition', "attachment; filename='" . $file['name'] . "'");
    }
}
