<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseTestContext.php">
*   Copyright (c) 2019 Aspose.Words for Cloud
* </copyright>
* <summary>
*   Permission is hereby granted, free of charge, to any person obtaining a copy
*  of this software and associated documentation files (the "Software"), to deal
*  in the Software without restriction, including without limitation the rights
*  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
*  copies of the Software, and to permit persons to whom the Software is
*  furnished to do so, subject to the following conditions:
*
*  The above copyright notice and this permission notice shall be included in all
*  copies or substantial portions of the Software.
*
*  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
*  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
*  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
*  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
*  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
*  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
*  SOFTWARE.
* </summary>
* --------------------------------------------------------------------------------------------------------------------
*/
namespace Aspose\Tests\Words;

use Aspose\Words\Model\Requests;
use Aspose\Storage\Api\StorageApi;
use Aspose\Words\Configuration;
use Aspose\Words\WordsApi;
use SplFileObject;

class BaseTestContext extends \PHPUnit_Framework_TestCase
{
    protected $words;

    protected $config;
    protected static $baseTestPath = "Temp/SdkTests/TestData/";
    public static $baseTestOut = "TestOut/";
    public static $baseRemoteFolder = "Temp/SdkTests/TestData/";

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->config = new Configuration();
        $creds = \GuzzleHttp\json_decode(file_get_contents(realpath(__DIR__  . '/../../..' . "/Settings/servercreds.json")), true);
        /*
         * To run with your own credentials please, replace parameter in methods 'setAppKey' and 'setAppSid' accordingly to your's AppSid and AppKey
         */
        $this->config->setAppKey($creds["AppKey"]);
        $this->config->setAppSid($creds["AppSid"]);
        $this->words = new WordsApi(null, $this->config);
    }

    public function uploadFile($file, $path){
        $request = new Requests\UploadFileRequest(new SplFileObject($file), $path);
        $result = $this->words->uploadFile($request);
    }

    /*
     * Returns api instance
     */
    public function get_api()
    {
        return $this->words;
    }

    protected function getGUID(){
        if (function_exists('com_create_guid')){
            return com_create_guid();
        }
        else {
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);// "}"
            return $uuid;
        }
    }


}