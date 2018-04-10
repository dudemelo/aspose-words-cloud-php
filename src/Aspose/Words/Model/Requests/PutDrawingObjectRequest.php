<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutDrawingObjectRequest.php">
 *   Copyright (c) 2018 Aspose.Words for Cloud
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
namespace Aspose\Words\Model\Requests;

/*
 * Request model for putDrawingObject operation.
 */
class PutDrawingObjectRequest
{
    /*
     * Initializes a new instance of the PutDrawingObjectRequest class.
     *  
     * @param string $drawing_object Drawing object parameters
     * @param \SplFileObject $image_file File with image
     * @param string $name The document name.
     * @param string $dest_file_name Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     * @param string $folder Original document folder.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $node_path Path to node, which contains collection of drawing objects.
     * @param string $password Password for opening an encrypted document.
     * @param string $revision_author Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     * @param string $revision_date_time The date and time to use for revisions.
     * @param string $storage File storage, which have to be used.
     */
    public function __construct($drawing_object, $image_file, $name, $dest_file_name = null, $folder = null, $load_encoding = null, $node_path = null, $password = null, $revision_author = null, $revision_date_time = null, $storage = null)             
    {
        $this->drawing_object = $drawing_object;
        $this->image_file = $image_file;
        $this->name = $name;
        $this->dest_file_name = $dest_file_name;
        $this->folder = $folder;
        $this->load_encoding = $load_encoding;
        $this->node_path = $node_path;
        $this->password = $password;
        $this->revision_author = $revision_author;
        $this->revision_date_time = $revision_date_time;
        $this->storage = $storage;
    }

    /*
     * Drawing object parameters
     */
    public $drawing_object;
	
    /*
     * File with image
     */
    public $image_file;
	
    /*
     * The document name.
     */
    public $name;
	
    /*
     * Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public $dest_file_name;
	
    /*
     * Original document folder.
     */
    public $folder;
	
    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $load_encoding;
	
    /*
     * Path to node, which contains collection of drawing objects.
     */
    public $node_path;
	
    /*
     * Password for opening an encrypted document.
     */
    public $password;
	
    /*
     * Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     */
    public $revision_author;
	
    /*
     * The date and time to use for revisions.
     */
    public $revision_date_time;
	
    /*
     * File storage, which have to be used.
     */
    public $storage;
}
