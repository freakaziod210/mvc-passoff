<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;

    class PageController extends Controller
    {
        public function getPageInfo($id)
        {
            settype($id, 'integer');

            $content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            $newContent = '';

            for($pos = 0; $pos < strlen($content); $pos++) {
                $char = substr($content, $pos, 1);
                $charCode = ord($char);

                if($char == ' ') {
                    $newCharCode = $charCode;
                } else {
                    $newCharCode = $charCode + $id;
                }

                $newChar = chr($newCharCode);
                $newContent[$pos] = $newChar;
            }

            return view('page', ['pageId'=> $id, 'content'=>$newContent]);
        }
    }
?>