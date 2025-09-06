# php-aihtml
Read text file and rendered to HTML with only giving by spaces. This code automatically give you the HTML format

Usage 
<pre>
require_once "aihtml.php";
use Aihtml\Aihtml;
$file="sample.txt";
$html = new Aihtml($file);
echo $html->readHtml();
</pre>


<h1> This AIHTML code translate the text file with out tags will give you the Rendered HTML.</h1><h2>  You can open the sample.txt file and see how the text file used</h2><h1> <hr/></h1><h1> For this H1 heading give 1 spaces in txt file</h1><h2>  For this H2 heading give 2 spaces in txt file</h2><h3>   For this H3 heading give 3 spaces in text file</h3><h4>    For this H4 heading give 4 spaces in text file</h4><h5>     For this H5 heading give 5 spaces in text file</h5><p><hr/></p><h3>   For Un-Order list give 7 spaces and | as separator for more orderlist points</h3><ul><li>Dot First Point</li><li>Dot Second Point</li><li>Dot Third Point</li></ul><p><hr/></p><h3>   For Order list give 7 spaces and | as separator for more orderlist points</h3><ol><li>First Point</li><li>Second Point</li><li>Third Point</li></ol><p><hr/></p><h3>   For the image give 8 spaces and | as separator example ( http://server_address/image_desination_folder/imageone.jpg|alt content|Long Description|200|150|left )</h3><img class='pimg' src='https://media.istockphoto.com/id/1550071750/photo/green-tea-tree-leaves-camellia-sinensis-in-organic-farm-sunlight-fresh-young-tender-bud.jpg?s=612x612&w=0&k=20&c=RC_xD5DY5qPH_hpqeOY1g1pM6bJgGJSssWYjVIvvoLw=' alt='alt content' longdesc='Long Description' width='200' height='150' align='left' /><p>This is the sample image</p><p></p><h3>   For hyperlink text give 9 spaces and | as spearator. <br/>Example ( Prefix Text please follow the link |View Profile|https://github.com/9148884631manju-nath|_blank|classname| Sufix text of this url )</h3>         Prefix Text please follow the link <a class='classname' href='https://github.com/9148884631manju-nath' target='_blank'>View Profile</a> Sufix text of this url<h1> <hr/></h1>
