# pdf.js

<p>资料
<p>https://github.com/mozilla/pdf.js

<p>此插件有跨域问题需要借助test.php读取文件之后输出文件即可
 <p>    1，在viewer.html,头部添加了，覆盖之前的默认文件路径，传给php动态的路径
<p>    2，本身viewer.html?file=pdf会改变默认pdf路径，当不传递file时会使用DEFAULT_URL

 <p>   var DEFAULT_URL = 'test.php?pdf_url='+getQueryStringByName('pdf_url');
<p> function getQueryStringByName(name){
<p>     var result = location.search.match(new RegExp("[\?\&]" + name+ "=([^\&]+)","i"));
 <p>    if(result == null || result.length < 1){
 <p>        return "";
  <p>   }
  <p>   return result[1];
<p>}

<p>他还有手机模式，node 模式，编译模式
<p>1，现在源码
<p>2，npm install  下载依赖
<p>3，gulp server 打开服务，即可访问
<p>	* http://localhost:8888/web/viewer.html

<p>4，gulp generic 编译文件，最终生成一个build 文件夹，简单明了只有几个js 文件引入即可使用
<p>5，不同的编译方式代表不同的使用方法，具体可看demo的readme文件
<p>6，因为源码我已经编译了，因为只需要把 PDFbuild文件夹内的内容复制到本地服务环境下打开即可
<p>http://localhost/PDFbuild/generic/web/test.html
