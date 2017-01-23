<?php
/**
 * Created by PhpStorm.
 * User: chipreu
 * Date: 1/17/17
 * Time: 3:17 PM
 */

namespace App\Controllers;

use App\Core\App;

class FileManagementController
{
    public function uploads()
    {
//        var_dump($_POST['upload']);
//        exit;

        if (!is_uploaded_file($_FILES['upload']['tmp_name'])) {
            throw new \Exception('There was no file uploaded!');
            exit();
        }

        if ($_POST['upload'] == 'upload') {

            App::get('database')->insertFile('filestore', [

                'filename' => $_FILES['upload']['name'],
                'mimetype' => $_FILES['upload']['type'],
                'description' => $_POST['desc'],
                'filedata' => file_get_contents($_FILES['upload']['tmp_name'])

            ]);

        }

        return redirect('upload');

    }

    public function index()
    {
        $files = App::get('database')->selectFiles('filestore', ['id', 'filename', 'mimetype', 'description']);

        return view('upload', compact('files'));

    }


    public function delete()
    {
//        var_dump($_POST['id']);
//        die('fuck');

        if($_POST['delete'] == 'delete' and isset($_POST['id'])) {

           App::get('database')->deleteFile('filestore', [

            'id' => $_POST['id']

            ]);

       }

        return redirect('upload');

    }


}
