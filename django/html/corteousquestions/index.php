
    <!DOCTYPE html>
    <html>
    <head>
        <title>HP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Mclds">
        <meta name="description" content="Homepage">
        <link rel="stylesheet" type="text/css" href="css/tachyons.css" media="screen">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body class="vh-100 pa0 ma0 sans-serif roboto f4 fw6 dark-gray bg-near-white">
        <div id="page_container" class="relative min-h-100 overflow-hidden db">
            <div id="content_wrap" class="pb3">
                <?php require "partials/header.php"; ?>
                <div id="top-spacer" class="h4 mt0.5 mb4">
                </div>
            

    <div id="flex-container" class="flex mt=2 mb=2">
        <div id="col1" class="flex-row items-center self-center justify-center content-center w-10 order-0">
    </div>
        <div id="col2" class="flex-row items-center self-center justify-center content-center w-80 order-1">
          <script>
                    function showResults(str) {
                    if (str.length == 0) {
                    document.getElementById("results_wrapper").innerHTML = "";
                    return;
                    } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("results_wrapper").innerHTML = this.responseText;
                    }
                    };
                    xmlhttp.open("GET", "/support_files/tags/tag_link.php?q=" + str, true);
                    xmlhttp.send();
                    }
                    }
                    </script>
                      
        <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Solve Casn't find fulltext index MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> If the MySQL's fulltext search is ending with a <br> Can't find fulltext index matching column list,<br> It may be because the matching fields of the<br> search must be exactly like all the columns that <br> have fulltext index and must be shown in exactly <br> the same order.<br> Example:<br>                                                       <br> SELECT title FROM db WHERE MATCH(todos os campos que \<br> têm fulltext e na ordem que aparecem na base de dados)\<br> AGAINST ('query')<br>                                                        </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="fulltext">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="index">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Using Vim's Native Spellcheck</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Vim has a efficient native spell checker.<br> The two most import commands, are these:<br>                                          <br> 'z='   see suggestions of spelling.<br> 'zg'   add to dictionary<br>                                          <br> https://tinyurl.com/yg63tq6c</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="spellcheck">
<input type="button" onclick="showResults(this.value)" value="spelling">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to Use Twzer</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To use Twzer, a command line URL shortener and<br> expander, do the following:<br> Shorten a link using Bitly with   bitly or  b:<br> 'twzer sh  b https://example.com'<br> Expand a link using Google with   google or  g:<br> 'twzer ex  g https://goo.gl/F0pE'<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="twzer">
<input type="button" onclick="showResults(this.value)" value="url shortener">
<input type="button" onclick="showResults(this.value)" value="shortener">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Change color Zsh-autosuggestions</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> <br> If the suggestions from zsh autosuggestions<br> is too dark, as it often is, you can change<br> the color with:<br>                                            <br> ZSH_AUTOSUGGEST_HIGHLIGHT_STYLE='fg=value'<br>                                           <br> Por isto no .zshrc.<br> https://tinyurl.com/yfebtxta<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="zsh-autosuggestions">
<input type="button" onclick="showResults(this.value)" value="zsh">
<input type="button" onclick="showResults(this.value)" value="oh-my-zsh">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Export MySQL table to csv</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To export a MySQL table with headers, to a csv file,<br> do the following:<br>                                                     <br> SELECT 'title', 'comment', 'k1', 'k2', 'k3', 'tempo'<br> UNION ALL<br> SELECT title, comment, k1, k2, k3, tempo<br> FROM bkmks<br> INTO OUTFILE '/var/lib/mysql/bkmks1.csv'<br> FIELDS TERMINATED BY ';'<br> OPTIONALLY ENCLOSED BY ''<br> LINES TERMINATED BY '\n';<br>                                                     </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="csv">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="table">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">SQLite Full Text Searching</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> CREATE VIRTUAL TABLE BookSearch USING fts5(ID, Title, Desc, tokenize = unicode61 tokenchars './ ^</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="full text">
<input type="button" onclick="showResults(this.value)" value="fulltext">
<input type="button" onclick="showResults(this.value)" value="sqlite">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to execute a command on every file in a directory in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br>   Call os.listdir(directory) to create a list of every file in directory.<br>  Use a for loop to iterate over the list, and inside the for loop call<br>  os.path.join(directory, filename) to build a full path to each filename<br>  in the list, with directory from the previous step. Call command(path)<br>  to execute command on the file.<br>                                                                          <br>  def file_command(filepath):<br>    f = open(filepath, a+)<br>    f.write(berry)<br><br>  a_directory = dir<br>  for filename in os.listdir(a_directory):<br>    filepath = os.path.join(a_directory, filename)<br>    file_command(filepath)<br>                                                                           <br>  https://tinyurl.com/yzrgezcj</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="directory">
<input type="button" onclick="showResults(this.value)" value="file">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Find strings with a substring in it</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To find a all events of a substring in a string,<br> use the following list comprehension:<br>                                                    <br> test_list = ['GeeksforGeeks', 'Geeky', 'Computers']<br> subs = 'Geek'<br> res = [i for i in test_list if subs in i]<br>                                                    <br> https://tinyurl.com/vr443qf</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="string">
<input type="button" onclick="showResults(this.value)" value="substring">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Update all pip packages</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> pip review   interactive</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="pip">
<input type="button" onclick="showResults(this.value)" value="pip3">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Passwd MySQL Servidor</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> I was forced to change my MySQL password, by circumstances<br> beyond my control. But to not stray too far from the<br> righteous path, the new one is:<br>                                                            <br> 'xxxxx'<br>                                                            </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="password">
<input type="button" onclick="showResults(this.value)" value="sickly">
<input type="button" onclick="showResults(this.value)" value="server">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">MySQL Union</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To add the content of several columns into one column, use<br> the 'Union' operator. An example:<br>                                                           <br> SELECT k1 FROM notes SELECT k2 FROM notes;<br>                                                           <br> You can add as much as you want. It returns a unique<br> column, with no repeats.<br> https://www.mysqltutorial.org/sql union mysql.aspx</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="union">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="unite">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create Git Repository</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>   1   Create a new repository, if needed,<br>  2   Change the current working directory<br>      to your local project.<br>  3   Initialize the local directory as a<br>      Git repository:<br>                                          <br>  git init  b master<br>                                          <br>  4   Adds the files in the local<br>      repository and stages them for<br>      commit. To unstage a file, use 'git<br>      reset HEAD YOUR FILE':<br>                                           <br>  git add .<br>                                           <br>  5   Commit the files that you've staged<br>      in your local repository.<br>                                           <br>  git commit  m First commit<br>                                           <br>  6   copy the remote repository URL.<br>  7   add the URL for the remote repository<br>      where your local repository will be<br>      pushed:<br>                                            <br>  git remote add origin  <REMOTE_URL><br>                                            <br>  8   Push the changes in your local<br>      repository to remote repository:<br>                                            <br>  git push origin main<br>                                            </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="git">
<input type="button" onclick="showResults(this.value)" value="repository">
<input type="button" onclick="showResults(this.value)" value="git server">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Print file content</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Opening a file in python for reading is easy:<br> with open('example.txt', 'r') as f:<br> To get everything in the file, just use read()<br>     file_contents = f.read()<br> And to print the contents, just do:<br>     print (file_contents)<br> https://bit.ly/3io5Ucd<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="file">
<input type="button" onclick="showResults(this.value)" value="print">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create a breakpoint with pdb</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To create a breakpoint in a Python file, near the point where<br> you wan your breakpoint, write:<br>                                                              <br> import pdb<br> brekpoint()<br>                                                              <br> https://tinyurl.com/yeqfmxhc</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="debug">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="breakpoint">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create iterator without repeated values</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To get a list, dictionary ... expunged of repeated<br> values do the following:<br>                                                   <br> set(<iterator_to_be_cleaned>)<br>                                                   <br> https://www.geeksforgeeks.org/python set method/</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="set">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="iterator">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Tidy Keybind</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> The keybind to run tidy is \q</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tidy">
<input type="button" onclick="showResults(this.value)" value="keybind">
<input type="button" onclick="showResults(this.value)" value="html">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Dump a MySQL database</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> For this to work you must be root<br> user. Sudo alone won't cut it.<br>                                   <br> mysqldump  u <user>  p \<br> <db_name> > /path/to/backups.sql<br>                                   <br> https://tinyurl.com/yhr8hlyp<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="backup">
<input type="button" onclick="showResults(this.value)" value="dump">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">greater than but less than python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To define a value in Python that is greater than x<br> but less than y, write it like this:<br>                                                   <br> x < value < y<br>                                                   </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="comparisons">
<input type="button" onclick="showResults(this.value)" value="grater than">
<input type="button" onclick="showResults(this.value)" value="less than">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Keybind for PHP errors</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> The keybind to run PHP error checker is '\y'</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="php">
<input type="button" onclick="showResults(this.value)" value="keybind">
<input type="button" onclick="showResults(this.value)" value="vim">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Read file in Bash Script</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To read a file in a bash script, do this:<br>                                          <br> while IFS= read  r line; do<br>     echo a line: $line<br> done < file<br>                                          <br> to read file content to a variable:<br>                                          <br> foo=$(<file)<br>                                          <br> https://tinyurl.com/yjtwesau</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="file">
<input type="button" onclick="showResults(this.value)" value="bash">
<input type="button" onclick="showResults(this.value)" value="script">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Show Triggers in Sqlite-utils</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br><br> To see configured triggers in the database:<br>                                                <br> sqlite utils  t <path/to/db> <table_name><br>                                                <br> More information through:<br>                                                <br> sqlite.utils triggers   help<br>                                                 </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sqlite-utils">
<input type="button" onclick="showResults(this.value)" value="triggers">
<input type="button" onclick="showResults(this.value)" value="trigger">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Full Text Search Postgresql</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Although the subject is extensive and I don't grok it completely,<br> here's first impressions on how you can use full text search in<br> postgres:<br>                                                                    <br> SELECT <column><br> FROM <table><br> WHERE to_tsvector(<another_column>) @@ to_tsquery('<query string>');<br> As an example:<br> Select all title entries from the bookmark table, in lines where the<br> comment column had this particular query string.<br> The '@@' symbol means text search.<br> There is more to this, but, as a starter, this intro<br> will do.<br>                                                                      <br> https://tinyurl.com/yjqy69lo</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="postgres">
<input type="button" onclick="showResults(this.value)" value="fulltext">
<input type="button" onclick="showResults(this.value)" value="search">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Sed delete x number of characters</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To delete x number of characters with sed, you can just signal<br> how many you want with dots.<br> In this case, I deleted 6 characters from the end of the line.<br>                                                               <br> sed  r s/......$//g  apagar<br>                                                               </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="delete">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="characters">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Write a Timestamp in SQLite</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> CREATE TABLE MyTable(<br>   ...<br>   ...<br>   'time' TIMESTAMP DEFAULT CURRENT_TIMESTAMP);<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sqlite">
<input type="button" onclick="showResults(this.value)" value="timestamp">
<input type="button" onclick="showResults(this.value)" value="time">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Send Notifications Through Cron</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To send notifications through cron (as done in the todo app),<br> the command in the cron jobs need the following structure:<br>                                                              <br> export DISPLAY=:0.0 && XDG_RUNTIME_DIR=/run/user/$(id  u) <br> /usr/bin/notify send '<text for notifications>'<br>                                                              <br> Remember it must be sent as root. 'sudo crontab  e'<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="cron">
<input type="button" onclick="showResults(this.value)" value="notifications">
<input type="button" onclick="showResults(this.value)" value="notify-send">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Replace muitple indices in a string</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> To replace various indices in a string,<br> do the following:<br>                                         <br> test_str = 'geeksforgeeks is best'<br> indices = [2, 4, 7, 10]<br> repl_char = '*'   # replacement_character<br> temp = list(test_str)<br> for idx in indices:<br>    temp[idx] = repl_char<br> res = ''.join(temp)<br> print(res)<br> Output: 'ge*k*fo*ge*ks is best'<br>                                          <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="string">
<input type="button" onclick="showResults(this.value)" value="replace">
<input type="button" onclick="showResults(this.value)" value="remove">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Open a zst file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To open a zst file, now that all arch packages come<br> compressed with it, can be done thusly:<br>                                                    <br> unzstd yourfilename.zst<br>                                                    <br> This will create a tar file that you need to<br> uncompress in the usual manner.<br>                                                    </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="zst">
<input type="button" onclick="showResults(this.value)" value="zstd">
<input type="button" onclick="showResults(this.value)" value="compression">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to turn md to html</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> This is the process to turn to html<br> the original markdown files. After<br> building the corteousquestions.club<br> to substitute the <br> constantconstipation.club blog, that<br> was terminated as it was predicated<br> in using static site platforms to <br> build it and serve it, and since<br> finding out that, for all the trouble<br> it gave, you're better off just<br> doing everything by yourself.<br> Because of slowness on the server, I<br> recommend that post manipulations be<br> be done in home computer, and then<br> send only the files on the 'public'<br> folder.<br> After some time finding a good<br> converter from md to html, and after<br> kissing many frogs, I decided to use<br> pygmentize. Who had the added<br> advantage of already being installed.<br> This is the command:<br>                                      <br> pygmentyze  f html  o \<br> <new html to create> <old md file><br>                                       <br> After that it's needed to insert this<br> new html into the post template created.<br> This couldn't be done on site, as was<br> taking too much time on site.<br> After that it's necessary to upload the<br> files to the server, create new entry on<br> the index page, and that is all she wrote.<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="pygmentize">
<input type="button" onclick="showResults(this.value)" value="markdown">
<input type="button" onclick="showResults(this.value)" value="html">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">What to do if MySQL outupts 'no default values'</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> If you get an error saying that are missing default<br> values, input this line in a mysql session:<br>                                                     <br> SET GLOBAL sql_mode = 'ONLY_FULL_GROUP_BY';<br>                                                     <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="default">
<input type="button" onclick="showResults(this.value)" value="error">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Get filename from path in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To extract a filename from a path in Python,<br> write the following:<br>                                             <br> filename = os.path.basename('/path/to/use')<br>                                             <br> https://tinyurl.com/yf3wkbtk</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="path">
<input type="button" onclick="showResults(this.value)" value="file">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Update MySQL value by subtracting</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> To use an arithmetical operation on<br> MySQL db's you can do the following:<br> example with subtraction:<br>                                     <br> UPDATE <table_name><br> SET <column_to_be_altered> = \<br> <column_to_be_altered>   <value><br>                                      <br> Although this is interesting, if<br> possible use generated columns, like<br> this example taken from the adventure<br> game:<br>                                       <br> ALTER TABLE mana ADD COLUMN total \<br> GENERATED ALWAYS AS (value+damage) \<br> STORED;<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="operations">
<input type="button" onclick="showResults(this.value)" value="arithmetic">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Keep footer bottom of page but visible</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To keep an HTML footer in the bottom of the page<br> but still always visible, do the following:<br>                                                  <br> .footer {<br>    position: fixed; <br>    bottom: 0;<br>    left: 0;<br>    right: 0;<br> }<br>                                                    </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="footer">
<input type="button" onclick="showResults(this.value)" value="css">
<input type="button" onclick="showResults(this.value)" value="html">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Validate that object is file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Validating that an object is a file can be useful,<br> for example to make sure that in, a loop in a folder,<br> you'll iterate only through files.<br> This is how you do it:<br>                                                       <br> import os<br><br> os.path.isfile(path)<br>                                                       </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="isfile">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="file">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Boolean Mask Arrays</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Boolean mask is very useful and handy, when it comes to count, modify,<br> extract or manipulate values in an array based on certain condition<br> or criteria:<br>                                                                     <br> arr([1,2,3,4,5,6,7,8,9])<br>                                                                     <br> Now we create a boolean condition:<br>                                                                     <br> bool_array = arr > 3<br> print(bool_array)<br> output: array([False,False,False,True,True,True,True,True,True])<br>                                                                    <br> Now we create a boolean mask to filter all even numbers in 'arr':<br>                                                                    <br> mask = 0 == arr % 2<br> print(mask)<br> output: array([False,True,False,True,False,True,False,True,False])<br>                                                                   <br> Now with our mask, 'mask', we index on 'arr', that will return a<br> 1D array with the values that satisfy the condition:<br>                                                                   <br> even_values = arr[mask]<br> print(even_values)<br> output: [2,4,6,8]<br>                                                                   <br> https://bit.ly/2MPWcUb<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="numpy">
<input type="button" onclick="showResults(this.value)" value="boolean">
<input type="button" onclick="showResults(this.value)" value="mask">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Reminder For When Recovering Folders From Backup</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">When recovering files on folder backup disk, (sdd), remember to create .cache file in /home, .cache file in /root, cache file in var</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="folders">
<input type="button" onclick="showResults(this.value)" value="backup">
<input type="button" onclick="showResults(this.value)" value="backblaze">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add clipboard to server vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To add clipboard functionality to vim running<br> on a server has several steps.<br>                                              <br> 1   Install Xorg<br> 2   Select a 'huge' distribution from vim<br> 3   Verify that ~/.ssh/config exists on your<br>     local computer and add this:<br>     Host myserver<br>        ForwardX11 yes<br>        ForwardX11Trusted yes<br>                                              </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="clipboard">
<input type="button" onclick="showResults(this.value)" value="ssh">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Enter and Exit D Environment</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>  <br>  To activate it:<br>                                     <br>  source ~/dlang/dmd 2.096.0/activate<br>  ____________________________________<br>  to deactivate it:<br>                                      <br>  deactivate<br>  </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="D">
<input type="button" onclick="showResults(this.value)" value="d">
<input type="button" onclick="showResults(this.value)" value="dlang">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Change files extensions on a Folder</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To change all files in a folder extensions, from PHP<br> to HTML for example, do this:<br>                                                     <br> import os<br> files = os.listdir(currentdir)<br> for file in files:<br>    if '.php' in file:<br>        new_file = file.replace('.php', '.html')<br>        os.rename(file, new_file)<br>                                                     </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="files">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="folders">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Select non-duplicates items in MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br>  To only get non repeated results in your<br> SQL query, write:<br>                                          <br> SELECT DISTINCT <column> FROM <table><br>                                          </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="duplicates">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="repeats">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Define items with nested levels like tuples, dictionaries...</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> Sometimes its difficult to access a definition for something<br> that is second or third level apart from regular objects.<br> Things like tuple elements, list of lists, dictionaries, and<br> the like.<br> This definition is for a tuple, but it has some ideas to<br> retain. First, when you don't define, or can't define, the<br> level, represent it with a zero. I didn't know you could do<br> that.<br> Example from something I was doing for the notes, webapp:<br> '/srv/http/notes/resources/homepage_tagging/auto_update/<br> tag_is_new_msg.py' <br>                                                              <br> frst_val = [i[0] for i in lnk_num]<br>                                                              <br> https://tinyurl.com/y48wgcqm</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tuple">
<input type="button" onclick="showResults(this.value)" value="comprehension">
<input type="button" onclick="showResults(this.value)" value="list">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to always have a view over the files in a webbrowser</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To make assure you'll be able to see the files in the folders<br> on a web browser, instead of seeing 403 errors, write in your<br> server configs:<br>                                                               <br> autoindex on<br>                                                               </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="nginx">
<input type="button" onclick="showResults(this.value)" value="apache">
<input type="button" onclick="showResults(this.value)" value="webbrowser">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">teste</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">teste</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="teste">
<input type="button" onclick="showResults(this.value)" value="teste">
<input type="button" onclick="showResults(this.value)" value="teste">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See hidden characters in Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To see hidden characters in vim, do:<br>                                     <br> :set list<br>                                     </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="hidden">
<input type="button" onclick="showResults(this.value)" value="characters">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See rowid's in a no id table</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">SELECT rowid,* FROM test;</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="rowid">
<input type="button" onclick="showResults(this.value)" value="id">
<input type="button" onclick="showResults(this.value)" value="sqlite">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create triggers for Sqlite3 DB's</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Here's one example of the three trigger you must create:<br>                                                                            <br> CREATE TRIGGER aft_insert AFTER INSERT ON pwd<br> BEGIN<br> INSERT INTO pwd_fts(pwdid, site, username, passwd, comment, time)<br> VALUES(new.pwdid, new.site, new.username, new.passwd, new.comment, new.time);<br> END;<br>                                                                            <br> CREATE TRIGGER aft_del AFTER DELETE ON pwd<br> BEGIN<br>INSERT INTO pwd_fts(pwdid, site, username, passwd, comment, time)<br> VALUES ('delete', old.pwdid, old.site, old.username, old.passwd, old.comment, old.time);<br> END;<br>                                                                           <br> CREATE TRIGGER aft_updt AFTER UPDATE ON pwd<br> BEGIN<br> INSERT INTO pwd_fts(pwdid, site, username, passwd, comment, time)<br> VALUES ('delete', old.pwdid, old.site, old.username, old.passwd, old.comment, old.time);<br> INSERT INTO pwd_fts(pwdid, site, username, passwd, comment, time)<br> VALUES(new.pwdid, new.site, new.username, new.passwd, new.comment, new.time);<br> END;<br>                                                                           <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sqlite">
<input type="button" onclick="showResults(this.value)" value="trigger">
<input type="button" onclick="showResults(this.value)" value="triggers">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Remove tuple from list</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To remove a tuple from a list, use a list<br> comprehension:<br>                                                   <br> foo = [('Abbott', 'Texas'), ('Abernathy','Texas'),<br>         ('Abilene', 'Texas'),('Ace', 'Texas'),<br>        ('Ackerly', 'Texas')]<br> foo = [x for x in foo if x!= (Abilene, Texas)]<br>                                                   <br>  https://tinyurl.com/yz2gt4sy:wq</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tuple">
<input type="button" onclick="showResults(this.value)" value="list">
<input type="button" onclick="showResults(this.value)" value="remove">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Using Autoexpect</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Use autoexpect thusly:<br>                       <br> sudo autoexpect<br>                       <br> This starts the shell<br> where the app will log<br> the commands.<br> To stop do:<br>                       <br> Ctrl d<br>                       </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="autoexpect">
<input type="button" onclick="showResults(this.value)" value="expect">
<input type="button" onclick="showResults(this.value)" value="automation">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Insert SQL file into Django database</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To upload a SQL dump file to a Django database, do this:<br>                                                         <br> cat filename.sql | python manage.py dbshell<br>                                                         <br> https://tinyurl.com/yjjv587h</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="django">
<input type="button" onclick="showResults(this.value)" value="sql">
<input type="button" onclick="showResults(this.value)" value="mysql">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">teste</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> keyID: 00081b448e6173c0000000003<br> keyname: mickey<br> applicationKey: K000cicptHJ94U7Lw9AwcklPfrYT7pM<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="teste">
<input type="button" onclick="showResults(this.value)" value="keys">
<input type="button" onclick="showResults(this.value)" value="backups">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Rename files in batch with zmv</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>  To rename a bunch of files, we can use zmv, a zsh tool.<br> zmv is not loaded by default, so remember to the this:<br>                                                        <br> autoload zmv<br>                                                        <br> Put it in .zshrc.<br> I needed to change a lot of files, keeping the first 3<br> characters and changing all the rest. This particular<br> operation in zmv, looks like this:<br>                                                        <br> zmv  n '(?(#c3))*_clean '$1.php'<br>                                                        <br> The ' n' flag runs the app in a dry run, so you can see<br> what it will do. In what I found out is a prudent thing<br> to do.<br> The '#c3' indicates the number of characters I want to<br> keep in the beginning of the file name, '_clean' was the<br> the suffix that the files had and I wanted to get rid of.<br> '$1' represents the part that you kept from the original<br> name and '.php' was the suffix I wanted to put on the<br> files.<br>                                                         <br> https://tinyurl.com/yfo4svou<br> https://filipe.kiss.ink/zmv zsh rename/</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="zmv">
<input type="button" onclick="showResults(this.value)" value="zsh">
<input type="button" onclick="showResults(this.value)" value="zshrc">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create Bindkeys in ZSH</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>  To bind a key to a preset command or a command of your own, we first<br>  need to know what is the code of the key that you intend on using.<br>  Let's say I want to use the F2 key;<br>                                                                                <br>  1   'showkey  a'<br>                                                                                <br> 	After opening the session, just click on the key you want:<br>                                                                                <br>  2   'F2'<br>  3   ^[OQ 	 27 0033 0x1b<br>  	 		 79 0117 0x4f<br>  	         81 0121 0x51<br>                                                                                <br>  The code to use is '^[OQ'. Then it can be as simple as:<br>                                                                                <br>  bindkey ^[OQ 'ls  la'<br>                                                                                <br>  or more complex as the case of the one that opens a file in the right<br>  side of current window, as a scratchpad:<br>                                                                                <br>  bindkey  s '^[OQ tilix  a session add right  x '<br>  micro /home/mic/scratchpad'<simbolo de acento circumflexo>M<br>                                                                                 <br>  https://bit.ly/3c9doyn<br>  </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="bind">
<input type="button" onclick="showResults(this.value)" value="keys">
<input type="button" onclick="showResults(this.value)" value="bindkeys">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Simple use case of BeautifulSoup</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> I had the need to analyse a svg image that I already had in my<br> computer. Since it was already downloaded, I didn't seem<br> necessary to use Scrapy as such, but just use Beautiful Soup,<br> as it seemed more appropriate.<br> I had to extract from the document, the strings of the text<br> tags in it. This is how it was done:<br>                                                              <br> with open('file_to_analyse', 'r') as f:<br>    soup = BeautifulSoup(fp, xml, from_encoding=utf 8)<br> texts = soup.find_all(text)<br> for text in texts:<br>     print(text.get_text())<br>                                                               <br> That simple.<br> https://linuxhint.com/parse_xml_python_beautifulsoup/</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="beautifulsoup">
<input type="button" onclick="showResults(this.value)" value="beautiful soup">
<input type="button" onclick="showResults(this.value)" value="scraping">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add patch to dwm</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To add a patch to dwm, do:<br>                           <br> git patch <patch_name><br>                           </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="dwm">
<input type="button" onclick="showResults(this.value)" value="patch">
<input type="button" onclick="showResults(this.value)" value="patches">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Goaccess access logs</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> For use in server 'machine'. Where the blog is.<br> To use Goaccess, do the following:<br>                                                 <br> goaccess /var/log/apache2/access.log  c<br>                                                 <br> https://goaccess.io<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="goaccess">
<input type="button" onclick="showResults(this.value)" value="logs">
<input type="button" onclick="showResults(this.value)" value="analytics">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Python Virtual Environments</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Para criar um ambiente virtual em python<br> fazer o seguinte:<br>                                         <br> python  m venv <nome do folder a usar><br>                                         <br> Entrar no folder e escrever:<br>                                          <br> source bin/activate<br>                                          <br> Para sair escrever:<br>                                          <br> deactivate<br>                                          </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="venv">
<input type="button" onclick="showResults(this.value)" value="virtual">
<input type="button" onclick="showResults(this.value)" value="env">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Print lines between two patterns</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> You can use Awk to print the lines between two patterns. Between<br> it and Sed, Awk's syntax is simpler and cleaner.<br>                                                                 <br> awk '/StartPattern/,/EndPattern/' FileName<br>                                                                 </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="awk">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="patterns">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Configuring Lighttpd Web Server</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To configure a lighttpd server, take the following steps:<br>                                                               <br> To get the latest php version in ubuntu or debian server,<br> add the following repository:<br> add apt repository  y ppa:ondrej/php<br> apt update<br>                                                               <br> apt install  y lighttpd<br>                                                               <br> groupadd lighttpd<br> useradd  g lighttpd  d /var/www/html  s /sbin/nologin lighttpd<br> chown  R lighttpd:lighttpd /var/www/html/<br>                                                                <br> Install PHP:<br> apt install  y php {cli,gd,fpm,mysql,curl,json,xml}<br>                                                                <br> mv /etc/php/8.0/fpm/pool.d/www.conf \<br> /etc/php/8.0/fpm/pool.d/lighttpd.conf<br>                                                                <br> Enter the pool config file:<br> vim /etc/php/8.0/fpm/pool.d/lighttpd.conf<br> Change the following:<br> Change the top line inside the brackets that sets the pool \<br> name from [www] to [lighttpd]<br> Change the line user = www data to user = lighttpd<br> Change the line group = www data to group = lighttpd<br> Change the line listen = /run/php/php8.0 fpm.sock to listen = \<br> /run/php/php8.0 lighttpd fpm.sock<br> Change listen.owner = www data to listen.user = lighttpd<br> Change listen.group = www data to listen.group = lighttpd<br>                                                                 <br> systemctl restart php8.0 fpm<br>                                                                 <br> apt install  y gcc libpcre3 libpcre3 dev zlib1g dev \<br> checkinstall libssl dev<br>                                                                 <br> wget https://download.lighttpd.net/lighttpd/<latest release><br>                                                                 <br> configure the package with this command;<br> ./configure   with openssl   sbindir=/usr/sbin<br>                                                                 <br> Enable the cgi and php modules.<br> lighttpd enable mod fastcgi<br> lighttpd enable mod fastcgi php<br>                                                                 <br> Edit the PHP configuration<br> vim etc/lighttpd/conf enabled/15 fastcgi php.conf<br> Remove the entire file contents and replace it with the following,<br> fastcgi.server += ( .php =><br>        ((<br>                socket => /run/php/php8.0 lighttpd fpm.sock,<br>                broken scriptfilename => enable<br>        ))<br>)<br>                                                                    <br>systemctl start lighttpd<br>For more information see here: https://tinyurl.com/yhw9bxsr</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="lighttpd">
<input type="button" onclick="showResults(this.value)" value="web server">
<input type="button" onclick="showResults(this.value)" value="server">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See inside drives without mounting</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">debugfs  R 'ls  l' /dev/sda6</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="drives">
<input type="button" onclick="showResults(this.value)" value="devices">
<input type="button" onclick="showResults(this.value)" value="mount">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Changelly</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">https://changelly.moonpay.io</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="changelly">
<input type="button" onclick="showResults(this.value)" value="bitcoin">
<input type="button" onclick="showResults(this.value)" value="moonpay">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Find tuple index</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To find the index of a tuple, use this  comprehension:<br>                                                       <br> idx = [i for i, tup in enumerate(<tuple_list>) \<br> if tup[0] == <tuple_you're_looking for>]<br>                                                       <br> https://tinyurl.com/yf7umkmu</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tuple">
<input type="button" onclick="showResults(this.value)" value="index">
<input type="button" onclick="showResults(this.value)" value="indexes">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Delete a range of records in MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To delete a range of records from a MySQL database, do this:<br>                                                             <br> DELETE FROM <table> WHERE id BETWEEN <number> AND <number><br>                                                             </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="delete">
<input type="button" onclick="showResults(this.value)" value="range">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See Django Settings</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> python manage.py diffsettings   all</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="settings">
<input type="button" onclick="showResults(this.value)" value="django">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to reinstall ls-icons</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> The program that serves the icons by folder/files in the ls<br> command is ls icons. To alter the colors being used its<br> necessary to recompile the program. Here are the needed steps:<br>                                                               <br> ./bootstrap<br> export CC=clang CXX=clang++<br> ./configure   prefix=/opt/coreutils<br> make<br> sudo make install<br>                                                               </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="ls-icons">
<input type="button" onclick="showResults(this.value)" value="icons">
<input type="button" onclick="showResults(this.value)" value="glyphs">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Pass List to Fire</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To pass a list of arguments to python fire,<br> write the list like this:<br>                                            <br> [one, two]<br>                                            </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="fire">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="list">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add file or folder to gitignore</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To hide files/folders from Git, create a .gitignore file,<br> we have a app called 'add gitignore' that does it for you,<br> if give input about what language you are using:<br>                                                           <br> add gitignore python<br>                                                           <br> This command, when inside the folder where you want to <br> create a git repository, will create a .gitignore file with<br> most of the things covered. But if you want to protect<br> specific files or folders, open the .gitignore file and:<br>                                                            <br> (add folder)  > folder_name/<br> (add file)    > .file_name<br>                                                            <br> https://www.pluralsight.com/guides/how to use gitignore file</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="gitignore">
<input type="button" onclick="showResults(this.value)" value="git">
<input type="button" onclick="showResults(this.value)" value="ignore">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Access Method From Imported Class</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To access a method in a class that was imported, do:<br>                                                     <br> from <other_file> import <ClassName()><br> class = ClassName()<br> return class.<ClassName method><br>                                                     </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="class">
<input type="button" onclick="showResults(this.value)" value="method">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Enabling Full Text Search Through SQL-utils</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To enable full text in a new table do this:<br>                                                 <br> sql utils enable fts <table name> <column list><br>                                                 <br> https://bit.ly/3qNboQz<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="fulltext">
<input type="button" onclick="showResults(this.value)" value="sqlite utils">
<input type="button" onclick="showResults(this.value)" value="full text">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Edit specific line in file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>  To change a specific line in a python file,<br> do the following:<br>                                            <br> f = open(sample.txt, r)<br> lines = f.readlines()<br> lines[13] = text to insert<br><br> f = open(sample.txt, w)<br> f.writelines(lines)<br> f.close()<br>                                            </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="lines">
<input type="button" onclick="showResults(this.value)" value="file">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Give write permissions to multiple users on a folder</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> 1   Create new group:<br>                                                  <br> sudo groupadd <new_group><br>                                                  <br> 2   Add users to it:<br>                                                  <br> sudo usermod  a  G <new_group> <user1><br> sudo usermod  a  G <new_group> <user2><br>                                                  <br> 3   Set new permissions:<br>                                                  <br> sudo chgrp  R <new_group> /path/to/the/directory<br> sudo chmod  R 770 /path/to/the/directory<br>                                                  <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="permissions">
<input type="button" onclick="showResults(this.value)" value="users">
<input type="button" onclick="showResults(this.value)" value="chmod">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Delete very n lines with Sed</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To delete every nth lines in a file,<br> write this:<br>                                     <br> sed 1~3d <file><br>                                     <br> Deletes very third line, starting<br> at 1.</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="delete">
<input type="button" onclick="showResults(this.value)" value="lines">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How To get environment variables of running process Linux</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> strings –a /proc/<pid_of_the_process>/environ</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="environment variables">
<input type="button" onclick="showResults(this.value)" value="env">
<input type="button" onclick="showResults(this.value)" value="environment">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">MySQL Update column based on another column</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To update a MySQL column based on the value of another column,<br> use the statement CASE:<br>                                                               <br> mysql> update employees<br>     set first_name = (CASE<br>                           WHEN id = 1<br>                             THEN 'Tim'<br>                           WHEN id = 2<br>                             THEN 'Dave'<br>                           END);<br> mysql> select * from employees;<br> +      +            +           +<br> | id   | first_name | last_name |<br> +      +            +           +<br> |    1 | Tim        | Doe       |<br> |    2 | Dave       | Doe       |<br> +      +            +           +<br>                                                                 <br> https://tinyurl.com/yfr76qxp</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="case">
<input type="button" onclick="showResults(this.value)" value="update">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Manually format code in Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> For manual formatting of a file, in Vim you can do the following:<br>                                                                  <br> 1   Select all the content,<br> 2   Press '='.<br> For HTML inside PHP, first change the filetype with:<br> ':set ft=html'<br> then do the other steps.<br>                                                                  </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="formatting">
<input type="button" onclick="showResults(this.value)" value="html">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to use PHP Code Sniffer</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To use this PHP linter you need to do this:<br>                                            <br> phpcs.phar /path/to/file/to/be/analyzed.php<br>                                            <br> https://github.com/squizlabs/PHP_CodeSniffer</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="php code sniffer">
<input type="button" onclick="showResults(this.value)" value="php">
<input type="button" onclick="showResults(this.value)" value="linter">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add line numbers to output</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>    <br>    To number output of apps or logs,<br>    you can use the nl linux app:<br>                                     <br>    sudo journalctl </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="logs">
<input type="button" onclick="showResults(this.value)" value="line numbers">
<input type="button" onclick="showResults(this.value)" value="number">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Multi character replacement in strings</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To replace more than one character at a time in a Python<br> string, use this form:<br>                                                          <br> test_str.replace('a', '<').replace('b', 'a')<br>                                                          </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="replace">
<input type="button" onclick="showResults(this.value)" value="characters">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Nome da Shell Kitada do Django</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> I dowmloaded an alternative shell for Django that already<br> uploads all your data to the shell. You call it, thusly:<br>                                                          <br> python manage.py shell_plus<br>                                                          </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="django">
<input type="button" onclick="showResults(this.value)" value="shell">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Count number of repeat values in a column</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To know how many times the values of a given column repeat<br> themselves, use the function COUNT. I'm using a example<br> from the database notes. Real data.<br>                                                           <br> SELECT COUNT(k1) AS repeats FROM notes GROUP BY k1;<br><br> Output excerpt:<br> +                         *         *<br> | k1                      | Repeats |<br> +                         +         +<br> | arch                    |       1 |<br> | backblaze               |       2 |<br> +                         +         +<br>                                                           </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="count">
<input type="button" onclick="showResults(this.value)" value="repeats">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Insert a string every n lines</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To insert a line into a file every nth line,<br> do the following:<br>                                             <br> sed '0~3 s/$/<string>/g' <file><br>                                             <br> Where:<br>    '0~3'   Every three lines.<br>    '$'    At the end of the line. If you want<br>           in a new line, put '\n' before the<br>           string.<br>    'g'    Replace all occurrences.<br>                                             <br>  https://tinyurl.com/yeo52psw</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="string">
<input type="button" onclick="showResults(this.value)" value="lines">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Deleting lines from a file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> You need to open the file and read its contents in memory,<br> then open the file again write the line to it but without<br> the line you wish to omit<br> Example:<br>                                                          <br> with open('yourfile.txt', 'r') as f:<br>     lines = f.readlines()<br> with open('yourfile.txt', 'w') as f:<br>     for line in lines:<br>             if line.strip('<br>') != 'nickname_to_delete':<br>                 f.write(line)'<br>                                                         <br> https://bit.ly/3nUlzRp<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="delete">
<input type="button" onclick="showResults(this.value)" value="file">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Join several lists without duplicates</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br>  To join several lists in a no duplicates super list,<br> do the following:<br>                                                     <br> set1 = set(list1)<br> set2 = set(list2)<br> set3 = set(list3)<br> combined_list = list(set3   set2   set1)<br>                                                      </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="lists">
<input type="button" onclick="showResults(this.value)" value="duplicates">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Running multiple commands in Subprocess</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To run multiple commands in Subprocess, put a<br> ';' between them. Like so:<br>                                              <br> cmd = 'rm <filename>'; rm <other filename><br>                                              </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="update">
<input type="button" onclick="showResults(this.value)" value="commands">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Write variable to a file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> To write a variable to a file, do this:<br>                                        <br> file.write(repr(<variable>))<br>                                        <br> https://tinyurl.com/yeyuuanm</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="variable">
<input type="button" onclick="showResults(this.value)" value="file">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to know content of HTTP Header</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To know the content of http respone header,<br> just do this:<br>                                            <br> wget  S <url of page><br>                                            </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="headers">
<input type="button" onclick="showResults(this.value)" value="http">
<input type="button" onclick="showResults(this.value)" value="content-type">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Access current file in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To access current file in python use the __file__<br> structure, the outputs as a complete path to your<br> file.</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="file">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="current file">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">titulo</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">titulo</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tit">
<input type="button" onclick="showResults(this.value)" value="titu">
<input type="button" onclick="showResults(this.value)" value="ulo">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Change mysql sql_mode</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> If you're getting several errors inputting commands,<br> it might be that the cause is that the mysql_mode is<br> defined with STRICT_TRANS_TABLES which comes by <br> default currently. To change this, do:<br>                                                      <br> SELECT @@GLOBAL.sql_mode global, \<br> @@SESSION.sql_mode session;<br> SET sql_mode = '';<br> SET GLOBAL sql_mode = '';<br>                                                      <br> This turns sql_mode into a empty string.<br> https://bit.ly/2LMtH9G<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="sql_mode">
<input type="button" onclick="showResults(this.value)" value="global">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Send a email through Mail</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To send an email through the cli app 'mail',<br> this is what you have to do:<br>                                              <br> mail destination@email.com<br> Subject: Hello World<br> Email Body.<br> .<br> <ctl+d><br>                                             <br> To end the mail it is needed to put a dot in<br> a clean line, and then press Control D, to<br> exit.<br> To send an attachment:<br>                                             <br> mail  A /opt/backup.sql  s Backup File <br> user@example.com < /dev/null<br>                                             <br></p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mail">
<input type="button" onclick="showResults(this.value)" value="cli">
<input type="button" onclick="showResults(this.value)" value="email">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create an empty array in numpty and append elements</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>                                        <br> arr = np.array([])<br> arr = np.append(arr, np.array([1,2,3]))<br> arr = np.append(arr, np.array([4,5,6]))<br> # arr is now [1,2,3,4,5,6]<br>                                        <br> https://bit.ly/3sSxlzs<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="numpy">
<input type="button" onclick="showResults(this.value)" value="array">
<input type="button" onclick="showResults(this.value)" value="append">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Comments in Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> I installed a plugin that helps with commenting and<br> uncommenting in Vim. The commands are:<br>                                                    <br> gcc   comment a line<br> gc   in visual mode, comments out a section<br> gcgc   uncomments adjacent lines<br>                                                     <br> https://tinyurl.com/3bss57y</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="comment">
<input type="button" onclick="showResults(this.value)" value="plugin">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">MySQL Cheatsheet</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>    #      Access     <br>    Access monitor: mysql  u [username]  p; (will prompt for password)<br>    Access database: mysql  u [username]  p [database]<br>    Create new database: create database [database];<br>    Select database: use [database];<br>    logout: exit;<br><br><br>    #      Information     <br>    Show all databases: show databases;<br>    Determine what database is in use: select database();<br>    Show all tables: show tables;<br>    Show table structure: desc [table];<br>    List all indexes on a table: show index from [table];<br>    Explain records: EXPLAIN SELECT * FROM [table];<br><br>    #      Adding/Inserting     <br>    Adding a column: ALTER TABLE [table] ADD COLUMN [column] VARCHAR(120);<br>    Adding a column with an unique, auto incrementing ID: ALTER TABLE [table] \<br>    ADD COLUMN [column] int NOT NULL AUTO_INCREMENT PRIMARY KEY;<br>    Inserting a record: INSERT INTO [table] ([column], [column]) VALUES ('[value]', '[value]');<br>    MySQL function for datetime input: NOW()<br>    Selecting records: SELECT * FROM [table];<br><br>    #      Selecting     <br>            (Selectors: <, >, !=; combine multiple selectors with AND, OR)<br>    Selecting parts of records: SELECT [column], [another column] FROM [table];<br>    Selecting specific records: SELECT * FROM [table] WHERE [column] = [value];<br>    Select records containing [value]: SELECT * FROM [table] WHERE [column] LIKE '%[value]%';<br>    Select records starting with [value]: SELECT * FROM [table] WHERE [column] LIKE '[value]%';<br>    Select records starting with val and ending with ue: SELECT * FROM [table] WHERE [column] LIKE '[val_ue]';<br>    Select a range: SELECT * FROM [table] WHERE [column] BETWEEN [value1] and [value2];<br>    Select with custom order and only limit: SELECT * FROM [table] WHERE [column]ORDER BY [column] ASC LIMIT [value]; (Order: DESC, ASC)<br><br>    #      Updating     <br>    Updating records: UPDATE [table] SET [column] = '[updated value]' WHERE [column] = [value];<br><br>    #      Deleting     <br>    Deleting records: DELETE FROM [table] WHERE [column] = [value];<br>    Delete a range of records: DELETE FROM [table] WHERE id BETWEEN ... AND ...<br>    Delete all records from a table (without dropping the table itself): DELETE FROM [table];<br>    Delete all records in a table: truncate table [table];<br>    Delete a index: DROP INDEX index_name ON table_name;<br>    Removing table columns: ALTER TABLE [table] DROP COLUMN [column];<br>    Deleting tables: DROP TABLE [table];<br>    Deleting databases: DROP DATABASE [database];<br><br>    #      Order     <br>    Order output randomly: SELECT * FROM [table] ORDER BY RAND()<br>    <br>    #      Import/Export Databases     <br>    Export a database dump (more info here): mysqldump  u [username]  p [database] > db_backup.sql<br>    Import a database dump (more info here): mysql  u [username]  p  h localhost [database] < db_backup.sql</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="cheatsheet">
<input type="button" onclick="showResults(this.value)" value="cheat">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Ignore Flake8 error</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> ~/.config/flake8</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="flake8">
<input type="button" onclick="showResults(this.value)" value="error">
<input type="button" onclick="showResults(this.value)" value="errors">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">xgfbgxnhb</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">xzfdgfx</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tdhjhd">
<input type="button" onclick="showResults(this.value)" value="xfghzxgjh">
<input type="button" onclick="showResults(this.value)" value="dthgdxgjhn">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Insert port range in ufw</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> Example of a port range:<br>                         <br> ufw allow 5025:5050/tcp<br>                         </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="ufw">
<input type="button" onclick="showResults(this.value)" value="port">
<input type="button" onclick="showResults(this.value)" value="range">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Looping through multiple lists</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Use zip to loop through multiple lists without having<br> them be in a:<br>    for i in list a:<br>        for i in list b:<br> situation.<br>                                                       <br> for x, y in zip(a, b):<br>    print x, y<br>                                                       <br> For a real example see use of this in the file in<br> '/srv/http/notes/resources/id_links/build_csv.py'</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="lists">
<input type="button" onclick="showResults(this.value)" value="zip">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Getting items in a dictionary</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>                      <br> a = {..., ...,..,...}<br> for i in a:<br>    (i, a[i])<br>                       <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="dictionary">
<input type="button" onclick="showResults(this.value)" value="item">
<input type="button" onclick="showResults(this.value)" value="dictionaries">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Rebuilding fts with sqlite-utils</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To rebuild your fts service, do this in the console:<br>                                                         <br> sqlite utils rebuild fts <path/to/db> <fts_table_name><br>                                                        <br> Mais informação ver:<br>                                                        <br> sqlite utils rebuild fts   help<br>                                                        </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sqlite-utils">
<input type="button" onclick="showResults(this.value)" value="fts">
<input type="button" onclick="showResults(this.value)" value="virtual tables">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Enviar mail de cli</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Para enviar um mail de uma das apps minimais de mail da linux<br> o modelo é simples. One liner:<br>                                                              <br> echo 'message body' </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mail">
<input type="button" onclick="showResults(this.value)" value="mailx">
<input type="button" onclick="showResults(this.value)" value="cli">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to use Python Subprocess</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>   This is the best way to use Subprocess. Although it may have a<br>  intimidating semantycs, if your use profile is simple, as is<br>  generally my case, the tool is also simple.<br>  It should be used thusly:<br>  Define the command ahead of time. It simplifies the look of the<br>  code. Although that the all expression should be a string, you<br>  can interpolate with variables, as in the example below, taken<br>  from a real use case.<br>                                                                  <br> cmd = 'txt2html   infile ' + filepath + '   outfile ' + \<br> filepath + '.html'<br>                                                                 <br> With this done, is just the case of assembling the expression:<br>                                                                 <br> subprocess.run(cmd, shell=True)<br>                                                                 <br> https://tinyurl.com/yjlohwud</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="subprocess">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="shell">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create a python requirements.txt file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> To create a requirements.txt file, explaining<br> all the used libraries and their versions,<br> do the following:<br>                                                <br> pipreqs </path/to/project><br>                                                 <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="requirements.txt">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="flask">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add integers to a list in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To add values to previous values in a list, use the<br> following formulation:<br>                                                     <br> a_list = [0, 0, 0]<br> integers_to_add = [1, 2, 3]<br><br> for index, integer in enumerate(integers_to_add):<br>    a_list[index] += integer<br><br> print(a_list)<br> OUTPUT<br> [1, 2, 3]<br>                                                      <br> https://tinyurl.com/yekxf6fc</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="integers">
<input type="button" onclick="showResults(this.value)" value="lists">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Extract Archives with Ranger</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To extract archives with input:<br>                                <br> 1l<br>                                </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="extract">
<input type="button" onclick="showResults(this.value)" value="archives">
<input type="button" onclick="showResults(this.value)" value="ranger">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Python String Manipulation</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> <br> Here are some string manipulation that proved useful.<br> Split method:<br>                                                       <br> s = Username: How are you today?<br>  s.split(':')<br>  ['Username', ' How are you today?']<br>  s.split(':')[0]<br>  'Username'<br>  https://bit.ly/3pC2uFi<br>                                                       <br>  Python String upper():<br>                                                       <br>  text = 'geeKs For geEkS'<br>  print(text.upper())<br>  GEEKS FOR GEEKS<br>  https://bit.ly/3coDs8R<br>                                                       <br>  How to get the part of a string before a specific<br>  character in Python:<br>                                                       <br>  a_string = docs.python.org<br>  partitioned_string = a_string.partition('.')<br>  print(partitioned_string)<br>  Output: ('docs', '.', 'python.org')<br>  before_first_period = partitioned_string[0]<br>  print(before_first_period)<br>  Output: docs<br>  https://bit.ly/3oBMBgS<br>                                                       <br>  Several methods to remove characters from a string,<br>  can be seen here: https://bit.ly/2MEM4xi<br>  </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="strings">
<input type="button" onclick="showResults(this.value)" value="string">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Install python package from source</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">sudo python setup.py install</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="package">
<input type="button" onclick="showResults(this.value)" value="setup.py">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Insert character in a given location inside a file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Neste exemplo ir se à usar sed para colocar um caracter<br> na posição 15 de cada linha. O código é este:<br>                                                         <br> sed  r  e 's/^.{15}/&#/' file<br>                                                         <br>  https://tinyurl.com/yz48plqs</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="file">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="bash">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Append date to a filename</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>Append date to a file name:<br>echo 'export now=$(date +%m_%d_%Y)' >> /home/mic/.zshenv<br>source /home/mic/.zshenv<br>touch ~/log $now.log<br></p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="date">
<input type="button" onclick="showResults(this.value)" value="append">
<input type="button" onclick="showResults(this.value)" value="file">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See Content of Array GET and POST Methods</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> This is a way to print all the elements of an array contained in a<br> GET OR POST method. It translates all the html special characters,<br> and presents them as a key : value series:<br>                                                                    <br> if ($_GET) {<br>    echo <pre>;<br>    echo htmlspecialchars(print_r($_GET, true));<br>    echo </pre>;<br> }<br>                                                                    <br> https://tinyurl.com/yyt3n7us</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="php">
<input type="button" onclick="showResults(this.value)" value="get">
<input type="button" onclick="showResults(this.value)" value="post">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to make for content not cover header</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> This works for header and footer alike. When you have a always visible<br> header/footer in a site, with the position set on 'fixed', This makes<br> these elements invisible to the rest of the page and they will scroll<br> over it as if not there. To avoid that you should do the following:<br> 1   Your header should have this characteristics:<br>    1.1   position fixed;<br>    1.2   top: 0;<br>    1.3   define a background color or image;<br>    1.4   give a padding top value to the element beneath the header<br>    also create another like this:<br>                                                                        <br>    header + preceding_element {<br>        padding top: Xpx;<br>    }<br>                                                                        <br>    1.5   Define 'z index' values so as to guarantee that the elements<br>    that we want on top have the higher numbers. The higher, the more<br>    visible.</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="headers">
<input type="button" onclick="showResults(this.value)" value="css">
<input type="button" onclick="showResults(this.value)" value="footer">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to represent shell variable inside a string</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To represent a shell variable or command inside a string, try<br> this model that envelops the 'git status' command line<br> command.<br>                                                               <br> echo $(git status) &> status_results.txt<br>                                                               </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="shell">
<input type="button" onclick="showResults(this.value)" value="variable">
<input type="button" onclick="showResults(this.value)" value="string">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Aspell Micro Plugin</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> The aspell plugin for the Micro editor is a spell checker.<br> It starts automatically and you just have to accept or not<br> the suggestions. You can accept suggestions via this<br> command:<br>                                                           <br> acceptsug 'n'<br>                                                           <br> Or use the 'Tab' key to cycle through possibilities and<br> accept.<br> It should be noted that the tab shortcut is not just for<br> accepting suggestions, you can also do autocomplete,<br> indent the selected text, or insert tab.<br> You can add words that aspell considers a mistake, to your<br> personal dictionary, and this way they won't be picked<br> again. The command for this is:<br>                                                           <br> addpersonal<br>                                                           <br>  https://bit.ly/39c21Uz<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="aspell">
<input type="button" onclick="showResults(this.value)" value="micro">
<input type="button" onclick="showResults(this.value)" value="plugin">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Using Python Debugger Trepan3k</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To use the Trepan3k (python 3 version of Trepan2), we can,as an<br> example, construct the following command line expression:<br>                                       <br> trepan3k   highlight=light  o somefile.txt file_to_debugged.py<br>        <br> The flag highlight, colorizes the output. It can be light or<br> dark.<br> The flag o defines to what file will go the output of the<br> debugging. BEWARE, if you choose this, you wont see the output<br> when running it from the terminal.<br> https://python2 trepan.readthedocs.io<br></p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="trepan3k">
<input type="button" onclick="showResults(this.value)" value="debug">
<input type="button" onclick="showResults(this.value)" value="debugger">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Delete empty lines with Sed</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To delete all empty lines in a file, do:<br>                                         <br> sed /^$/d <file><br>                                         <br> https://tinyurl.com/ygzdkgb4</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="empty">
<input type="button" onclick="showResults(this.value)" value="lines">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Command to Use Duplicity With Backblaze</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">sudo duplicity / b2://00081b448e6173c0000000003:K000cicptHJ94U7Lw9AwcklPfrYT7pM@computer image</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="backblaze">
<input type="button" onclick="showResults(this.value)" value="duplicity">
<input type="button" onclick="showResults(this.value)" value="backup">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Import a csv file to MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> LOAD DATA INFILE '/var/lib/mysql/<name_of_file>'<br> INTO TABLE <table_name><br> FIELDS TERMINATED BY '<character that is used to<br> separate the input fields><br> ENCLOSED BY '<If the strings are enclosed by any<br> symbol, ' or , indicate that here><br> LINES TERMINATED BY '<br>'<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="csv">
<input type="button" onclick="showResults(this.value)" value="import">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Find out what account an application runs as</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To know the user of a application do:<br>                                      <br> ps auxw | grep <app name><br>                                      </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="user">
<input type="button" onclick="showResults(this.value)" value="group">
<input type="button" onclick="showResults(this.value)" value="ps">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Delete nth occurrence of a character in a line</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To delete the Nth occurrence of a character, on the<br> same line, use this expression:<br>                                                      <br> sed s/'//2 lines_tags1.txt<br> Where:<br>   1    '/.../' is the space to put the expression to<br>       delete. Notice that I didn't have to escape it.<br>   2   '//' represent that, instead of a normal<br>       substitution operation, this pattern won't be<br>       replaced by nothing, deleting it.<br>   3   '2' indicates the n of the occurrence. In this<br>       case it was the second occurrence of the '<br>       character.<br>                                                      <br> https://tinyurl.com/ygj7d7dn</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="delete">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="lines">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Numpy Fancy Indexing</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Fancy indexing allows us to select entire rows or columns out of<br> order.<br> Fancy indexing allows us to grab any row using its index, let’s<br> grab row 1, 2 and 3.<br> We need to pass in a list of required rows in square brackets:<br> Let's suppose a 2D array named 'arr':<br>                                                                 <br> arr[[1,2,3]]<br> output: array([[1,1,1],<br>                [2,2,2],<br>                [3,3,3]])<br>                                                                 <br> Now with columns:<br>                                                                <br> arr[:,[3,2]]<br> output: array([[3,2],<br>                [7,6],<br>                [1,0],<br>                [0,1]])<br>                                                                  <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="numpy">
<input type="button" onclick="showResults(this.value)" value="fancy indexing">
<input type="button" onclick="showResults(this.value)" value="indexing">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">MySQL combine two columns into one</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> SELECT FirstName AS First_Name<br>     , LastName AS Last_Name<br>     , ContactPhoneAreaCode1<br>     , ContactPhoneNumber1<br>     , COALESCE(ContactPhoneAreaCode1, ContactPhoneNumber1) AS Contact_Phone <br>  FROM TABLE1</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="columns">
<input type="button" onclick="showResults(this.value)" value="combine">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Use sudo password in script</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> To insert your password in a script, do the following:<br>                                                       <br> echo '<password> | sudo  S < command to implemment><br>                                                       <br> https://tinyurl.com/yjwx2bzq<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sudo">
<input type="button" onclick="showResults(this.value)" value="password">
<input type="button" onclick="showResults(this.value)" value="script">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Enable keys for Fulltext search MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> If a Fulltext index is not working,<br> Se if this is enabled:<br>                                    <br> ALTER TABLE table name ENABLE KEYS;<br>                                    <br></p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="fulltext">
<input type="button" onclick="showResults(this.value)" value="keys">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Iterate though files in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To iterate through files in a folder, use the<br> following formulation to create a list of<br> complete URLS for all the files, as an example:<br>                                                 <br> import os<br><br> paths = []<br> folder = '/path/to/folder'<br> for filename in os.listdir(folder):<br>     paths.append(os.path.join(folder, filename))<br> print(paths)<br>                                                  <br> https://tinyurl.com/yeqvybpx</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="files">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="iterate">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Make output into columns</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Many commands output text that is hard to read<br> because the data isn’t lined up well.<br> For example, try:<br>                                                <br> mount<br>                                               <br> Use the column command to make things easier:<br>                                               <br> mount </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="columns">
<input type="button" onclick="showResults(this.value)" value="output">
<input type="button" onclick="showResults(this.value)" value="terminal">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add Timestamp to Command</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Juntar um timestamp a um comando:<br>                                     <br> command </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="timestamp">
<input type="button" onclick="showResults(this.value)" value="time">
<input type="button" onclick="showResults(this.value)" value="add">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Edit specific line in file in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To edit a specific line in a file, with Python,<br> do the following;<br>                                                <br> with open('file_name', 'r') as f:<br> lines = f.readlines()<br> lines[1] = <some text change><br><br> with open('file_name', 'w') as f:<br> f.writelines(lines)<br>                                                <br> https://tinyurl.com/yhp4ug42</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="file">
<input type="button" onclick="showResults(this.value)" value="edit">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Replacing nth ocurrence of a substring in string</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br>                                                                            <br> def nth_repl(s, sub, repl, n):<br>    find = s.find(sub)<br>    # If find is not  1 we have found at least one match for the substring<br>    i = find !=  1<br>    # loop util we find the nth or we find no match<br>    while find !=  1 and i != n:<br>        # find + 1 means we start searching from after the last match<br>        find = s.find(sub, find + 1)<br>        i += 1<br>    # If i is equal to n we found nth match so replace<br>    if i == n:<br>        return s[:find] + repl + s[find+len(sub):]<br>    return s<br><br><br> s = str(results)<br> s1 = nth_repl(s, ',', '', 1) # Replaces 1st ocurrence of a comma<br> s2 = nth_repl(s1, ',', '', 2)<br> s3 = nth_repl(s2, ',', '', 3)<br>  https://bit.ly/3r3NrEO<br>                                                                           <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="string">
<input type="button" onclick="showResults(this.value)" value="replace">
<input type="button" onclick="showResults(this.value)" value="strings">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Installing Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> The Vim versions from aur or even the github one, are not<br> what I want from Vim. To ensure that there is all I need.<br> The only solution is to download from GitHub and configure<br> with this flags:<br>                                                          <br> ./configure   with features=huge  enable gui   with x<br>                                                          </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="install">
<input type="button" onclick="showResults(this.value)" value="clipboard">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Importing MySQL db with sql file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> After having exported the sql file containing the db,<br> this can be imported to another server by creating a<br> new database. It is only needed the command:<br>                                                      <br> CREATE DATABASE <bd_name><br>                                                      <br> After use this cli command:<br>                                                      <br> mysql  u <username>  p <new_db_name> < file.sql<br>                                                      <br> Nothing more is needed. The process is automatic.</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="importing">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="import">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Replace String in a List of Lists</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>null_list = [[x.replace(' ', '') for x in i] for i in null_list]</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="list of lists">
<input type="button" onclick="showResults(this.value)" value="lists">
<input type="button" onclick="showResults(this.value)" value="strings">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Sed commands sucessfully used</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> I'll put here some successful examples of sed commands that<br> ran without any problems.<br>                                                            <br> <br> sed  e s/tag= \(.*\)\>/\1/ complete_lines.txt<br> Added separated tag values to complete lines. The '\1' <br> symbol represents the content of the first '/.../' section,<br> and, as the second '/.../' section on a replace command<br> means the output, tells sed to output it.<br><br>                                                            <br> <br> sed 's/php?/&, /' lines_tags.txt<br> Replaced the 'php?' string with the '&, ' string.<br><br>                                                            <br> <br> sed  ne s/.*/\'&/p lines_tags.txt<br> This was used to add a character, ', to the beginning of<br> the line. The e apparently means 'script' and adds it to the<br> command, but I don't see how that's relevant to this example.<br> The pattern '.*' means, all characters except line break<br> ('.'), in all lines of the document ('*').<br> The ampersand means  “the whole part of the input that was<br> matched by the pattern”.<br> The 'p' in the end of the expression stands for 'print'.<br><br>                                                            <br><br> sed s/php?/&'/ lines_tags.txt<br> Puts a ' in the end of the first element.<br><br>                                                            <br><br> sed s/, /&'/ lines_tags.txt<br> And this one puts another at the start of the second<br> element.<br><br>                                                            </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="commands">
<input type="button" onclick="showResults(this.value)" value="Sed">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to get a mysql output without the table decoration</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To get an output from mysql without the table decoration,<br> ask in this manner:<br>                                                          <br> mysql  B   user=mic   password='xxxx'  D bkmks   execute select link from bkmks<br>                                                          </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="decoration">
<input type="button" onclick="showResults(this.value)" value="table">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Get line number for file in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To get line numbers in python opened<br> files, do the following:<br>                                         <br> lookup = 'the dog barked'<br><br> with open(filename) as myFile:<br>    for num, line in enumerate(myFile, 1):<br>        if lookup in line:<br>            print 'found at line:', num<br>                                          </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="file">
<input type="button" onclick="showResults(this.value)" value="line number">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Open all files in folder in Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To open all files in a folder with Vim,<br> do this:<br>                                        <br> vim  p *<br>                                        </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="open">
<input type="button" onclick="showResults(this.value)" value="files">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Using openssl to connect externally</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>  This subject came to me, when I needed to connect with a mail<br>  server that had ssl encryptation. To link to it you do the<br>  following:<br>                                                                <br>  openssl s_client   connect <server name:port><br>                                                                <br>  After that it will probably be needed login information, which<br>  can be inputted in the following manner:<br>                                                                <br>  a1 login <username> <password><br>                                                                <br>  Notice the 'a1' tag. It can be anything you like, but it must<br>  be consistent. For instances, after 'a1' must come 'a2', and<br>  so on.<br>                                                                <br>  a2 list '' '*'<br>                                                                <br>  Shows a list of your mailboxes.<br>                                                               <br>  a3 examine <mailbox name><br>                                                               <br>  Gives you metadata about the mailbox.<br>                                                               <br>  a4 select <mailbox name><br>                                                               <br>  Selects a particular mailbox<br>                                                               <br>  a5 fetch 1 body[]<br>                                                               <br>  Fetches the first email in the mailbox.<br>                                                               <br>  For more information see:<br>  https://bit.ly/38HrK76<br>  https://tools.ietf.org/html/rfc3501#page 27<br>  </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="openssl">
<input type="button" onclick="showResults(this.value)" value="ssl">
<input type="button" onclick="showResults(this.value)" value="mail">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Ports for Email Servers</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> These are the ports that must be open to use mail<br> in a server:<br>                                                   <br> SMTP (sending mail)	Encrypted   TLS/STARTTLS 465<br> SMTP (sending mail)	Encrypted   SSL	465<br> SMTP (sending mail)	Unencrypted	25* (or 26)<br> POP3 (receiving mail)	Encrypted   TLS	995<br> POP3 (receiving mail)	Encrypted   SSL	995<br> POP3 (receiving mail)	Unencrypted	110<br> IMAP (receiving mail)	Encrypted   TLS	993<br> IMAP (receiving mail)	Encrypted   SSL	993<br> IMAP (receiving mail)	Unencrypted	143<br>                                                   <br> https://tinyurl.com/yzpzuj57</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="port">
<input type="button" onclick="showResults(this.value)" value="smtp">
<input type="button" onclick="showResults(this.value)" value="mail">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Iterating over a sequence with range function</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To skip over elements in a iteration, you<br> can use range to indicate what steps will<br> be affected:<br>                                          <br> for i in range(1, 10, 2)<br>     print(i, end='. ')<br>                                          </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="range">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="skip">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Remove beep from computer</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> <br> Needed to remove beep from the backtrace<br> key.<br> To remove the beeps that system pc does,<br> do the folowing: go to /etc/inputrc and<br> write:<br>                                        <br> set bell style none<br>                                        <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="beep">
<input type="button" onclick="showResults(this.value)" value="bell">
<input type="button" onclick="showResults(this.value)" value="remove">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Open a port for an app</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To open a port for a application in linux,<br> do the following:<br>                                                <br> iptables  A INPUT  p tcp   dport 4000  j ACCEPT<br> sudo systemctl restart iptables<br>                                                 <br> To test it, do this:<br>                                                 <br> ls | nc  l  p 4000<br>                                                 <br> and now in another terminal:<br>                                                 <br> telnet localhost <port number><br>                                                 <br>  https://tinyurl.com/yjjk4n8v</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="port">
<input type="button" onclick="showResults(this.value)" value="open port">
<input type="button" onclick="showResults(this.value)" value="open">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add an app to ufw list</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> To add an app, do the following:<br>                                     <br> vi /etc/ufw/applications.d/nginx.ini<br> Place this inside file<br><br> [Nginx HTTP]<br> title=Web Server <br> description=Enable NGINX HTTP traffic<br> ports=80/tcp<br><br> [Nginx HTTPS] \<br> title=Web Server (HTTPS) \<br> description=Enable NGINX HTTPS traffic<br> ports=443/tcp<br><br> [Nginx Full]<br> title=Web Server (HTTP,HTTPS)<br> description=Enable NGINX HTTP and HTTPS traffic<br> ports=80,443/tcp<br>                                       <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="ufw">
<input type="button" onclick="showResults(this.value)" value="app">
<input type="button" onclick="showResults(this.value)" value="list">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Convert scss file to css</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br>  To convert a sass file, just do:<br>                                    <br> sass file.scss destination_file.css<br>                                     <br> https://sass lang.com/guide</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="scss">
<input type="button" onclick="showResults(this.value)" value="css">
<input type="button" onclick="showResults(this.value)" value="sass">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Repeat string in vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> If you have abc on a line by itself,<br> go to that line and, in normal mode:<br>                                     <br> dd50gP<br>                                     <br> That is, delete line, set 50 as<br> repetition count, paste before<br> cursor and move cursor to just after<br> the new text (which has an empty<br> line that you may or may not want to<br> delete).<br>                                      </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="repeat">
<input type="button" onclick="showResults(this.value)" value="string">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create a multicolumn layout in Flexbox</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To create a multi column layout in Flexbox, do this<br> in your html:<br>                                                     <br> <div class=row><br>    <div class=col><br>        <h2>First Column</h2><br>        <p>Test content</p><br>    </div><br>    <div class=col><br>        <h2>Second Column</h2><br>        <p>Test content</p><br>    </div><br>    <div class=col><br>        <h2>Third Column</h2>                <br>        <p>Test content</p><br>    </div><br>    <div class=col><br>        <h2>Fourth Column</h2>                <br>        <p>Test content</p><br>    </div><br></div><br>                                                      <br>In your css:<br>.row {<br>    display: flex;<br>}<br>                                                      <br>https://tinyurl.com/yfgjwqyf</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="html">
<input type="button" onclick="showResults(this.value)" value="css">
<input type="button" onclick="showResults(this.value)" value="flexbox">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Convert string to tuple</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To convert string to tuple, do:<br>                                <br> res = eval(test_str)<br>                               <br> https://www.geeksforgeeks.org/python convert string to tuple/</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tuple">
<input type="button" onclick="showResults(this.value)" value="string">
<input type="button" onclick="showResults(this.value)" value="convert">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Journalctl. Use Relative time Periods</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> <br> IF you change the letter after<br> the number into a 'd' it'll be<br> days, if a 's', seconds. The<br> example is with minutes.<br>                               <br> sudo journalctl  S  1m<br>                               <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="journalctl">
<input type="button" onclick="showResults(this.value)" value="time">
<input type="button" onclick="showResults(this.value)" value="periods">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Convert Dictionary Values To a List</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Converting the values of a dictionary to a list creates a new list<br> where each element is a value from the dictionary. For example,<br> converting the values of {a:1,b:2} to a list results in [1,2].<br> Call dict.values() to create a view of the dictionary's values.<br> Use list(item) with the view of dictionary values as item to return<br> a list.<br> Example:<br> a_dictionary = {a: 1, b: 2}<br> values = a_dictionary.values()<br> Retrieve dictionary values<br> values_list = list(values)<br> Convert to list<br> print(values_list)<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="dictionary">
<input type="button" onclick="showResults(this.value)" value="list">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to return dictionary keys as a list in Python?</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> <br> Try list(newdict.keys()).<br> This will convert the dict_keys object to a list.<br>                                                  <br> for key in newdict.keys():<br>  print(key)<br>  https://bit.ly/3j2w4Bw<br>                                                   <br>  </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="dictionary">
<input type="button" onclick="showResults(this.value)" value="dictionaries">
<input type="button" onclick="showResults(this.value)" value="list">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Paste outside Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">  <br>  To paste to outside of Vim, hold the shift key, select<br>  the text you want, key 'Ctrl c', and then press the <br>  mouse middle button to paste.</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="paste">
<input type="button" onclick="showResults(this.value)" value="copy">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Send script output to journalctl</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To send the script output to journalctl,<br> you do the following:<br>                                         <br> sudo systemd cat ./path/to/script<br>                                         <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="journalctl">
<input type="button" onclick="showResults(this.value)" value="logging">
<input type="button" onclick="showResults(this.value)" value="logs">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Iterate with an incrementer, defining where to start</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To increment through an iterator, defining a starting point,<br> you have these possibilities,<br> To iterate through a list, starting at 8 and incrementing<br> two by two, do:<br>                                                             <br> for i in range(8, len(lines), 2):<br>                                                            <br> This can be summarized like this:<br>                                                            <br> print(lines[8::2])<br>                                                            <br> https://tinyurl.com/yhr6h37l</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="range">
<input type="button" onclick="showResults(this.value)" value="increment">
<input type="button" onclick="showResults(this.value)" value="length">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Command Line Calculator</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> The command to access the calculator is 'bc'.<br> https://bit.ly/3sHYk0P<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="calculator">
<input type="button" onclick="showResults(this.value)" value="command line">
<input type="button" onclick="showResults(this.value)" value="linux">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Edit command line commands in Editor</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Suppose you are typing a very long command line:<br> PATH='/home/alw/bin:/home/alw/bin:/home/alw/bin:<br> /usr/local/sbin:/usr/local/bin:/usr/sbin:<br> /usr/bin:/sbin:/bin:/usr/games:/usr/local/games:<br> /snap/bin'<br> You discover a mistake before you hit Enter. Or<br> you discover it later and call the line back in<br> your history. You can edit on the command line,<br> of course, but if you prefer your editor of<br> choice press Control+X Control+E. Your default<br> editor (usually set with $EDITOR or $VISUAL)<br> will start with the command loaded.<br> https://bit.ly/2Y96wc4<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="editor">
<input type="button" onclick="showResults(this.value)" value="command line">
<input type="button" onclick="showResults(this.value)" value="editing">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Erro "There 9 values but only 8"</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> If a error pops up that says that you have more<br> values than columns, check that the table<br> <name of your table>.fts_content, is not repeating<br> the id value in the c0 column.<br> If it is, delete your fts table and your triggers,<br> and use this command:<br>                                                   <br> sqlite utils enable fts   fts5   create triggers <br> <path/to/db> <table_name> <list of columns to use><br>                                                   <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="error">
<input type="button" onclick="showResults(this.value)" value="mismatch">
<input type="button" onclick="showResults(this.value)" value="sqlite">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See Kitty's themes</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To see kitty's themes, input:<br>                              <br> kitty +kitten themes<br>                              </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="kitty">
<input type="button" onclick="showResults(this.value)" value="terminal">
<input type="button" onclick="showResults(this.value)" value="themes">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Convert list of tuples to list</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To change al list of tuples to a lists, do this:<br>                                                 <br> lt = [('Geeks', 2), ('For', 4), ('geek', '6')]<br> out = [item for t in lt for item in t]<br>                                                 <br> https://tinyurl.com/yj3m2yw3</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tuples">
<input type="button" onclick="showResults(this.value)" value="list">
<input type="button" onclick="showResults(this.value)" value="tuple">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add string after another substring</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> You can use sed to add a string after a particular substring<br> in a text.<br> To add creating a new line under the substring:<br>                                                              <br> sed  '/\<substring>\/a <text to insert>/' <file><br> Where:<br> 1   The '\' is an escape character,<br> 2   '/a' indicates 'after match'.<br>                                                              <br> If you wanted you insert before the match, use '/i'.<br> If you want to insert in the same line as the substring, do<br> this:<br>                                                              <br> sed 's/<substring>/& <text to insert>/' <file><br> Where '/&' indicates that is inserted in the same line.<br>                                                              <br> https://tinyurl.com/yfbeoqrd<br> https://tinyurl.com/yhywfg98</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="substring">
<input type="button" onclick="showResults(this.value)" value="string">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Connect to Nordvpn</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To connect to nordvpn do this:<br>                                        <br> cd /etc/openvpn/ovpn_udp<br> sudo openvpn se492.nordvpn.com.udp.ovpn<br> user: micaldas@mailfence.com<br> pwd: $Gfip9oR;H}u<br>                                         <br> https://tinyurl.com/y92dmaod</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="nordvpn">
<input type="button" onclick="showResults(this.value)" value="openvpn">
<input type="button" onclick="showResults(this.value)" value="vpn">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Convert date to unix time</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Example of how to convert date into<br> unix epoch time:<br>                                     <br> date  d '2021 06 11 00:32:30 GMT' +%s</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="date">
<input type="button" onclick="showResults(this.value)" value="unix">
<input type="button" onclick="showResults(this.value)" value="time">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Activate Python Virtual Environment</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> When it's needed to use a virtual environment to shield the<br> computer and the program from each other, we create a virtual<br> environment this way:<br>                                                               <br> python3  m venv myvenv<br> source venv/bin/activate<br> deactivate   Para abandonar o ambiente<br>                                                                </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="venv">
<input type="button" onclick="showResults(this.value)" value="virtual">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Use a variable from a function on another function</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To access a variable inside a function from another function,<br> it must be assigned to the function object. Once that happens<br> the variable can be used inside and outside the function.<br>                                                               <br> def function_1():<br>    # assigning a string as a member of the function object<br>    # instead of var = variable inside function_1,<br>    # we do:<br>    function_1.var = variable inside function_1<br><br>    print(function_1 has been called)<br><br> def function_2():<br>    print(function_2 has been called)<br>    print(function_1.var)<br><br> function_1()<br> function_2()<br>                                                                 <br> https://tinyurl.com/yh8jjz98<br> https://tinyurl.com/yxc9mwod</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="functions">
<input type="button" onclick="showResults(this.value)" value="variables">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Reset Ducky Keyboard</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> To reset Ducky keyboard, press both<br> windows keys until the light flashes.<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="ducky">
<input type="button" onclick="showResults(this.value)" value="keyboard">
<input type="button" onclick="showResults(this.value)" value="reset">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">MySQL Generated Columns</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> MySQL's generated columns, allow you to create<br> columns that are the result of an arithmetical<br> calculation. For example:<br>                                                <br> ALTER TABLE products<br> ADD COLUMN stockValue<br> GENERATED ALWAYS AS (buyprice*stock) STORED;<br>                                                <br> STORED refers if you create a normal column or<br> use a virtual one. Keep in mind the default is<br> virtual. So you have to put STORED.<br>                                                 <br> https://tinyurl.com/yhdmfsj2<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="columns">
<input type="button" onclick="showResults(this.value)" value="generated">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Servers</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> sickly<br> galgoesgalgado.club<br> constantconstipation.club<br> 136.244.96.33<br> calmocolirio<br>                           <br> django<br> minegit.club<br> corteousquestions.club<br> 70.34.205.44<br> novacholdra</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="server">
<input type="button" onclick="showResults(this.value)" value="ips">
<input type="button" onclick="showResults(this.value)" value="sites">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Delete git files present before .gitignore</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> In case that your repository already has uploads<br> like pycache or log files, you can block these<br> files in .gitignore, but these won't remove them<br> from the repository.<br> To do this, first commit all changes to git and <br> then use these commands:<br>                                                  <br> git rm  rf   cached .<br> git add .<br> git commit ...<br>                                                  <br> https://tinyurl.com/yeomtda2</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="gitignore">
<input type="button" onclick="showResults(this.value)" value="git">
<input type="button" onclick="showResults(this.value)" value="delete">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to redirect standard output e standard error</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To redirect simultaneously stfderr and stdout, use the<br> following notation:<br>                                                        <br> <command> &> <file><br>                                                        </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="redirect">
<input type="button" onclick="showResults(this.value)" value="stdout">
<input type="button" onclick="showResults(this.value)" value="stderr">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Find and replace lines starting with a pattern</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To replace substrings in a file that are at the beginning of a line,<br> do this:<br>                                                                        <br> sed  i 's/^a\tb.*$/<replacement text>/g' <file><br> Where:<br> ^   Represents beginning of file/input,<br> \t   Represents tab symbol,<br> .   Any character,<br> *   Zero or more of the preceding expression<br> $   End of input<br>                                                                        <br> In a real life case, it was used like this:<br>                                                                        <br> sed 's/.*<expression to look for>.*/<substitution pattern>/g' file_name<br>                                                                        <br> https://tinyurl.com/ygfk75nc</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="lines">
<input type="button" onclick="showResults(this.value)" value="replace">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create Dictionary With Multiple Values</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> There are a couple of ways to add values to key, and to create a list<br> if one isn't already there. I'll show one such method in little steps.<br>                                                                       <br> key = somekey<br> a.setdefault(key, [])<br> a[key].append(1)<br>                                                                       <br> Results:<br>                                                                       <br> >>> a<br> {'somekey': [1]}<br> Next, try:<br> key ='somekey'<br> a.setdefault(key, [])<br> a[key].append(2)<br>                                                                        <br> Results:<br>                                                                        <br> >>> a<br> {'somekey': [1, 2]}<br>                                                                         <br> The magic of setdefault is that it initializes the value for that key<br> if that key is not defined, otherwise it does nothing. Now, noting<br> that setdefault returns the key you can combine these into a single line:<br>                                                                          <br> a.setdefault('somekey',[]).append('bob')<br>                                                                          <br> Results:<br>                                                                          <br> >>> a<br> {'somekey': [1, 2, 'bob']}<br>                                                                          <br> https://bit.ly/3p3h2O4<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="dictionary">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="key">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Access a value in a tuple that is in a list</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To access the second value of a tuple, that<br> that is in a list, do this:<br>                                             <br> [x[1] for x in L]<br>                                             </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tuple">
<input type="button" onclick="showResults(this.value)" value="list">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add space in html</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> To create a space in html, write:<br>                                  <br> &nbsp;<br>                                  <br> For two spaces:<br>                                  <br> &nbsp;&nbsp;<br>                                  <br> https://tinyurl.com/yhumrjfx<br> https://tinyurl.com/ygaqx9fm</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="space">
<input type="button" onclick="showResults(this.value)" value="html">
<input type="button" onclick="showResults(this.value)" value="special characters">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Ipython profile config location</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">/home/mic/.ipython/profile_mic_profile/ipython_config.py</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="ipython">
<input type="button" onclick="showResults(this.value)" value="python shell">
<input type="button" onclick="showResults(this.value)" value="repl">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Recover deleted content on a git controlled folder</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> If you delete something that you shouldn't have to,<br> and there weren't any git commits after the deletion,<br> you can recover the data inputting:<br>                                                       <br> git checkout  f<br>                                                       </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="git">
<input type="button" onclick="showResults(this.value)" value="delete">
<input type="button" onclick="showResults(this.value)" value="deletion">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Projetos</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>  Para não me esquecer, vou por aqui, os projectos de coisas que<br>  acho interessante, e depois não as faço porque nunca mais me<br>  lembro delas.<br>                                                                 <br>  1   Livro 'Data Science in the Command Line':<br>  This book is about doing data science at the command line.<br>  Our aim is to make you a more efficient and productive<br>  data scientist by teaching you how to leverage the power of<br>  the command line.<br>  https://bit.ly/3sHiub0<br>                                                                <br>  2   'Let's Build a Simple Interpreter':<br>  If you don’t know how compilers work, then you don’t know<br>  how computers work. If you’re not 100% sure whether you<br>  know how compilers work, then you don’t know how they work.<br>  https://ruslanspivak.com/lsbasi part1/<br>                                                                <br>  3   Instalar Papis:<br> 'Papis is a command line based document and<br>  bibliography manager. Its command line interface (CLI)<br>  is heavily tailored after Git.'<br>  https://papis.readthedocs.io/en/latest/index.html<br>                                                                <br>  4   Criar um blog self hosted para por os meus musings sobre<br>  linux, o que estou a fazer em termos de projectos ...<br>  Pode ser uma coisa com piada.<br>                                                                <br>  5   Estudar o SQLAlchemy<br>  https://www.sqlalchemy.org/<br>                                                                <br>  </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="hobbies">
<input type="button" onclick="showResults(this.value)" value="hobby">
<input type="button" onclick="showResults(this.value)" value="lazer">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Entering postgresql</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> To enter the postgres console, type:<br>                                     <br> sudo  iu postgres<br> psql<br>                                     <br> https://tinyurl.com/27w3z4p<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="postgres">
<input type="button" onclick="showResults(this.value)" value="postgresql">
<input type="button" onclick="showResults(this.value)" value="pgsql">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create a Hidden Element With Javascript</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> This is JavaScript, more exactly JQuery, that hides an element and shows it at the press<br> of a button.<br>                                                                                         <br> This goes on the <head> tag:<br> <script src=https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js></script><br> this goes at end of the <body> tag:<br> $(#id_of_submitbutton).click(function()<br> { alert(Button code executed.);<br> });<br>                                                                                          <br> https://tinyurl.com/yhxr8cjn</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="javascript">
<input type="button" onclick="showResults(this.value)" value="hidden">
<input type="button" onclick="showResults(this.value)" value="html">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Comment chunks of code in Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To comment/uncomment chunks of text in Vim,<br> go to visual mode, select what you want to<br> comment/uncomment, and press:<br>                                            <br> gc<br>                                            <br> The command toggles, so you just have to<br> repeat it to revert your action.<br>                                            <br> https://tinyurl.com/3bss57y</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="commentary">
<input type="button" onclick="showResults(this.value)" value="comment">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Autoformat in vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> To auto formatt lines in vim, select code with v<br> and press =. This will trigger autoformat.</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="auto format">
<input type="button" onclick="showResults(this.value)" value="formatting">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Creating a line break in Markdown</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">To create a line break in Markdown, add two spaces in the end of the line.</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="markdown">
<input type="button" onclick="showResults(this.value)" value="line break">
<input type="button" onclick="showResults(this.value)" value="notabug">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to remove every other value from list</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> To remove every other entry in a list,<br> do the following:<br>                                       <br> <new_list> = <old_list>[1::2]<br>                                       <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="list">
<input type="button" onclick="showResults(this.value)" value="skip">
<input type="button" onclick="showResults(this.value)" value="remove">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Replace line when match found in Sed</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To replace the whole line where a match<br> was found, do this:<br>                                         <br> pattern to find in line   'six'<br> substitution pattern   'fault'<br><br> check all lines:<br> sed 's/.*six.*/fault/' file<br> matched lines  > then remove:<br> sed '/six/s/.*/fault/' file<br>                                         <br> https://tinyurl.com/ye8j3s8z</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="replace">
<input type="button" onclick="showResults(this.value)" value="lines">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Grep Usage</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To search for a text pattern in a given area, use grep:<br>                                                        <br> 'grep  r <pattern> </path>'<br>                                                        <br> As you used the ' r' flag, it will look recursively.<br> https://bit.ly/3c91pRq<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="grep">
<input type="button" onclick="showResults(this.value)" value="search text">
<input type="button" onclick="showResults(this.value)" value="folder">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Change directory in subprocess</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To change directories through subprocess, do the following:<br>                                                            <br> path = /path/you/want<br> cmd = <your_command_here><br> subprocess.run(cmd, cwd=path, shell=True)<br>                                                             </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="subprocess">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="change directories">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Alter Sqlite Table</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Para alterar uma table que não possa ser alterada por<br> sqlite utils,podemos usar este modelo. É também mais seguro,<br> que o sqlite utils também faz alguma merda.<br>                                                              <br> PRAGMA foreign_keys=off;<br> BEGIN TRANSACTION;<br> CREATE TABLE IF NOT EXISTS new_table(<br>    column_definition,<br> );<br> INSERT INTO new_table(column_list)<br> SELECT column_list<br> FROM table;<br> DROP TABLE table;<br> ALTER TABLE new_table RENAME TO table;<br> COMMIT;<br> PRAGMA foreign_keys=on;<br>                                                              <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="table">
<input type="button" onclick="showResults(this.value)" value="tables">
<input type="button" onclick="showResults(this.value)" value="sqlite">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Make Incremental Backups With Tar</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Create incremental backups with tar, in tar.gz format:<br>                                                       <br> tar    listed incremental=folder_name snapshot.file <br>  czf folder_name $now.tar.gz /boot<br>                                                        <br> https://bit.ly/3qNYHVQ<br> /home/mic/sripts/incremental_backup.sh<br></p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="tar">
<input type="button" onclick="showResults(this.value)" value="incremental">
<input type="button" onclick="showResults(this.value)" value="backup">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create a Directory in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To create a directory in Python, do:<br>                                     <br> os.mkdir(<path_to_desired_location>)<br>                                     </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="directory">
<input type="button" onclick="showResults(this.value)" value="folder">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Characters to esscape in Sed</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> The characters in Sed you need to escape are:<br>                                              <br> ‘?’, ‘+’, parentheses, braces (‘{}’), and ‘|’<br>                                              </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="escape">
<input type="button" onclick="showResults(this.value)" value="characters">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Marker commands</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Marker is an app that stores commands for future reference.<br> You retrieve them through a fuzzy finder.<br> Important commands:<br>                                                            <br> Ctrl space   searches commands similar to the one you just<br> wrote.<br> Ctrl k   Bookmark a command<br> Ctrl t   place cursor on next placeholder<br> 'marker remove'   remove bookmark<br>                                                             <br> https://github.com/pindexis/marker</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="marker">
<input type="button" onclick="showResults(this.value)" value="commands">
<input type="button" onclick="showResults(this.value)" value="command">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See processes attached to a port  by name and number</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To see process owner name and port number<br> input:<br>                                          <br> ss  tulpwn<br>                                          </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="port">
<input type="button" onclick="showResults(this.value)" value="pid">
<input type="button" onclick="showResults(this.value)" value="processes">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add Full Text search in MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>    <br>    To use the full text search in MySQL,<br>    use the following command:<br>                                          <br>    ALTER TABLE <table_name><br>    ADD FULLTEXT INDEX <index_name><br>    (<column1>, <column2>, ...);<br>                                           <br>    </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="fulltext">
<input type="button" onclick="showResults(this.value)" value="search">
<input type="button" onclick="showResults(this.value)" value="mysql">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Turn list of lists to list</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To turn a list of lists into a list, do this:<br>                                                 <br> regular_list = [[1, 2, 3, 4], [5, 6, 7], [8, 9]]<br> flat_list = [item for sublist in regular_list \<br> for item in sublist]<br>                                                  <br> https://tinyurl.com/yf57k6aj</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="lists">
<input type="button" onclick="showResults(this.value)" value="list of lists">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Supress messages from an applcation</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> If you want to ignore messages sent to the terminal by<br> overly chatty apps or just an error you don't care<br> about, use one of these commands.<br> This first suppresses output to STDOUT.<br> The second to STDERR.<br> The third, both.<br>                                                         <br> <command> 1>/dev/null<br> <command> 2>/dev/null<br> <command> &>/dev/null<br>                                                         </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="delete">
<input type="button" onclick="showResults(this.value)" value="supress">
<input type="button" onclick="showResults(this.value)" value="messages">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Pprint error</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To avoid a 'TypeError: 'module' object is not callable'<br> error when using pprint, import it like this:<br>                                                        <br> from pprint import pprint<br>                                                        </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="pprint">
<input type="button" onclick="showResults(this.value)" value="error">
<input type="button" onclick="showResults(this.value)" value="printing">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create queries log in MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br>   1. First, check if you already have the two tables slow_log and general_log<br>  existing in the MySQL database.<br>  If not, you have to create them, note that you have to create in the MySQL<br>  database. To create the general_log table:<br>                                                                              <br>  CREATE TABLE `general_log` (<br>   `event_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP<br>                          ON UPDATE CURRENT_TIMESTAMP,<br>   `user_host` mediumtext NOT NULL,<br>   `thread_id` bigint(21) unsigned NOT NULL,<br>   `server_id` int(10) unsigned NOT NULL,<br>   `command_type` varchar(64) NOT NULL,<br>   `argument` mediumtext NOT NULL<br>  ) ENGINE=CSV DEFAULT CHARSET=utf8 COMMENT='General log'<br>                                                                               <br>  The general query log is a general record of what mysqld is doing. The server<br>  writes information to this log when clients connect or disconnect, and it logs<br>  each SQL statement received from clients. The general query log can be very<br>  useful when you suspect an error in a client and want to know exactly what the<br>  client sent to mysqld. And the slow_log table:<br>                                                                                 <br>  CREATE TABLE `slow_log` (<br>   `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP<br>                          ON UPDATE CURRENT_TIMESTAMP,<br>   `user_host` mediumtext NOT NULL,<br>   `query_time` time NOT NULL,<br>   `lock_time` time NOT NULL,<br>   `rows_sent` int(11) NOT NULL,<br>   `rows_examined` int(11) NOT NULL,<br>   `db` varchar(512) NOT NULL,<br>   `last_insert_id` int(11) NOT NULL,<br>   `insert_id` int(11) NOT NULL,<br>   `server_id` int(10) unsigned NOT NULL,<br>   `sql_text` mediumtext NOT NULL,<br>   `thread_id` bigint(21) unsigned NOT NULL<br>  ) ENGINE=CSV DEFAULT CHARSET=utf8 COMMENT='Slow log'<br>                                                                                   <br> The slow query log consists of SQL statements that take more than long_query_time<br> seconds to execute and require at leastmin_examined_row_limit rows to be examined.<br> The slow query log can be used to find queries that take a long time to execute<br> and are therefore candidates for optimization.<br> The minimum and default values of long_query_time are 0 and 10, respectively.<br> The value can be specified to a resolution of microseconds.<br> 2. Enable Query logging on the database:<br>                                                                                    <br> SET global general_log = 1;<br> SET global log_output = 'table';<br>                                                                                    <br> 3. Now you can view the log by running this query:<br>                                                                                    <br> SELECT<br>    *<br> FROM<br>    mysql.general_log;<br>                                                                                   </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="logs">
<input type="button" onclick="showResults(this.value)" value="logging">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">matplotlib-backend-kitty</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To see Matplotlib plots in the terminal, initialize<br> matplotlib like this:<br>                                                     <br> import matplotlib<br> matplotlib.use('module://matplotlib backend kitty')<br> import matplotlib.pyplot as plt<br>                                                     <br> https://github.com/jktr/matplotlib backend kitty</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="matplotlib">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="kitty">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Apply css by element name</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To make a selection based in name, use the following<br> structure:<br>                                                      <br> Element name[name=name of the element]<br> Example:<br> input[name=goButton] {<br>  background: red;<br> }<br></p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="css">
<input type="button" onclick="showResults(this.value)" value="name">
<input type="button" onclick="showResults(this.value)" value="selector">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create DNS Records For Email Server</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To make sure that your email server is running without the risk of being<br> turned down by other mail providers and with a high grade of security, it<br> is needed to follow the next security records:<br>                                                                            <br> 1   MX Records. Here you just have to find the 'Mail Settings' in 'Advanced<br> DNS' in Namecheap, and just add '@' for 'Host', your domain for 'Value' and<br> 10 for setting the precedence.<br>                                                                             <br> 2   SPR Records or Reversed DNS. This is defined with your server provider.<br> In the case of Vultr, is just a case of opening your server, going to<br> settings, choosing 'IPV4', and there'll be already a value for reverse dns.<br> Change it to <your_ip>.<your_domain><br> And it's done.<br>                                                                             <br> 3   DKIM Records. This one is complicated. So I'll just point you to this<br> guide: https://tinyurl.com/yxunbp2v.<br> Be very mindful that the guide is wrong when it gets to the 'Create DKIM DNS<br> record' part. It is not correct in explaining what parts of the key are to be<br> used in the DNS text record. The correct way is this:<br>   'default._domainkey' is the value that you will insert in the 'Host' field.<br>   The value is the whole key, with no spaces or double quotes, starting from<br> 'k=rsa...' onwards until the end. Before that is to be ignored.<br>                                                                               <br> 4   DMARC Record. Just follow the online DMARC record creator form here,<br> https://tinyurl.com/y2vb6aff, and everything will be easy.<br>                                                                               </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="dns">
<input type="button" onclick="showResults(this.value)" value="email">
<input type="button" onclick="showResults(this.value)" value="server">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Spelling in Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> Vim has a builtin spelling command. This is how to use it.<br> 1   To set a particularly dictionary as default, only for<br> markdown and txt files, put this in .vimrc:<br>                                                            <br> autocmd FileType txt,text,md,markdown setlocal spell<br>                                                            <br> 2   To turn off spell, input:<br>                                                            <br> :set nospell<br>                                                            <br> 3   For auto suggest use:<br>                                                            <br> z=<br> Input enter to exit without changes or input the suggestion<br> number.<br>                                                            <br> 4   If spell is wrong and the word is correct:<br>                                                            <br> zg<br>                                                            <br> 5   If you want to mark a word as incorrect:<br>                                                            <br> zw<br>                                                            <br> https://tinyurl.com/yhgbo57z<br> https://tinyurl.com/yg63tq6c</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="spelling">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="spell">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Links to ORMS</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> https://tortoise orm.readthedocs.io/en/latest/<br> https://storm orm.readthedocs.io/en/latest/<br> http://sqlobject.org<br> https://ponyorm.org<br> https://www.sqlalchemy.org</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="orms">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Keep Passwords in Environment Variables</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> Sometimes is necessary to keep a password, secret key<br> in a environmental variable, for added security.<br> For this, do the following:<br>                                                       <br> import os<br> export ENVIRONMENT_VARIABLE='<some_long_password>'<br> <variable> = os.environ.get('<ENVIRONMENT_VARIABLE>')<br>                                                        <br> https://tinyurl.com/y47p4wp7<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="environmental variables">
<input type="button" onclick="showResults(this.value)" value="passwords">
<input type="button" onclick="showResults(this.value)" value="keys">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Ignore an error in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To ignore an error in Python, use the following<br> expression:<br>                                                <br> try:<br>    <expression_causing_the_error><br> except:<br>     pass<br>                                                <br> It will issue a warning but it will compile.</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="errors">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="ignore">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">PHP web server</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> When you need a web server soley to develop,<br> you can go to the folder where the content is<br> and write:<br>                                              <br> php  S localhost:8000</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="web server">
<input type="button" onclick="showResults(this.value)" value="server">
<input type="button" onclick="showResults(this.value)" value="php">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Subprocess Use Piped Expressions</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To use in subprocess a piped expression such as:<br> cat index.rst | grep .. include | cut  f 3  d<br> do this:<br>                                                  <br> cat = subprocess.Popen(['cat', 'index.rst'], <br>                        stdout=subprocess.PIPE,<br>                        )<br><br> grep = subprocess.Popen(['grep', '.. include::'],<br>                        stdin=cat.stdout,<br>                        stdout=subprocess.PIPE,<br>                        )<br><br> cut = subprocess.Popen(['cut', ' f', '3', ' d:'],<br>                        stdin=grep.stdout,<br>                        stdout=subprocess.PIPE,<br>                        )<br><br> end_of_pipe = cut.stdout<br> print(end_of_pipe)<br>                                                     <br> https://tinyurl.com/y57vk97m</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="subprocess">
<input type="button" onclick="showResults(this.value)" value="pipe">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Change default apps in xdg-open</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> Here is an example of what I did to change default<br> browser from Firefox to Vivaldi, in xdg:<br> ______________________________________________________<br> xdg mime dfefault vivaldi stable.desktop browser/http<br> xdg mime dfefault vivaldi stable.desktop browser/https<br> xdg mime dfefault vivaldi stable.desktop browser/ftp<br>                                                        <br> https://tinyurl.com/ybyepetq<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="xdg-open">
<input type="button" onclick="showResults(this.value)" value="default">
<input type="button" onclick="showResults(this.value)" value="xdg">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Skipping every other element after the first</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br>                               <br> for i in range(0, len(a), 2):<br>    #do something<br> https://bit.ly/3cmjImx<br>                                <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="string">
<input type="button" onclick="showResults(this.value)" value="skip">
<input type="button" onclick="showResults(this.value)" value="strings">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to Read Columns in a CSV With Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> When using csv files, the Pandas library has better support for the<br> format than the official csv library.<br> This is an example of how it can be used to select columns on a set.<br>                                                                     <br> dept.csv<br> +                      +<br> | Name    | Department |<br> +                      +<br> +                      +<br> | John    |     IT     |<br> +                      +<br> | Jane    |     HR     |<br> +                      +<br> | Jack    | Accounting |<br> +                      +<br><br> df = pd.read_csv('dept.csv', sep='|')<br> print(df['Name'])<br><br> +            +<br> |    IT      |<br> +            +<br> |    HR      |<br> +            +<br> | Accounting |<br> +            +<br>                                                                              <br> https://tinyurl.com/yg72h6xq<br> https://tinyurl.com/yzd3235u</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="csv">
<input type="button" onclick="showResults(this.value)" value="pandas">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Calibre Web</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> Calibre Web is a web ebook reader service.<br> It's self hosted and shows all the <br> Calibre's library.<br> You can start it with:<br>                                             <br> sudo python3 cps.py # or,<br> sudo nohup python3 cps.py<br>                                             <br> Github   https://tinyurl.com/hz6f7fy<br> Link   http://localhost:8083<br>                                              <br> Username: admin<br> Password: admin123<br>                                              <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="epub">
<input type="button" onclick="showResults(this.value)" value="web">
<input type="button" onclick="showResults(this.value)" value="self-hosted">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add substring at the end of a line or in the beginning</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br>  You can use sed to add a string after a particular substring<br> in a text.<br> To add creating a new line under the substring:<br>                                                              <br> sed  '/\<substring>\/a <text to insert>/' <file><br> Where:<br> 1   The '\' is an escape character,<br> 2   '/a' indicates 'after match'.<br>                                                              <br> If you wanted you insert before the match, use '/i'.<br> If you want to insert in the same line as the substring, do<br> this:<br>                                                              <br> sed 's/<substring>/ <text to insert>/' <file><br>                                                              <br> https://tinyurl.com/yfbeoqrd<br> https://tinyurl.com/yhywfg98</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sed">
<input type="button" onclick="showResults(this.value)" value="awk">
<input type="button" onclick="showResults(this.value)" value="file">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Get path to current file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To get path of current file in Python write __file__</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="current file">
<input type="button" onclick="showResults(this.value)" value="path">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Get a string up to a certain character in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To extract a string up to a chosen character,<br> do this:<br>                                               <br> <string>.split(<character>, <substitution)<br>                                               </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="character">
<input type="button" onclick="showResults(this.value)" value="string">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">credit card</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">4194600029523797<br>11/25<br>275</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="credit">
<input type="button" onclick="showResults(this.value)" value="card">
<input type="button" onclick="showResults(this.value)" value="credit card">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Set column length in Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To set the column length of a old md file,<br> before setting the length in .vimrc, do this:<br>                                               <br> :set colorcolumn=80<br>                                               </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="column">
<input type="button" onclick="showResults(this.value)" value="80">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See processes that are preventing unmounting</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> lsof </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="umount">
<input type="button" onclick="showResults(this.value)" value="mount">
<input type="button" onclick="showResults(this.value)" value="unmounting">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Access list of lists element with for loop</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> This is an example taken from a first excperience with the notes site,<br> to access a element inside a list of lists:<br>                                                                       <br> for <inner_list> in <outer_list>:<br>        <inner_list>[<index_number>] = <code of the alteration><br>                                                                        <br> Example of adding substring to beginnig and end of a list element:<br>                                                                        <br>    for lst in null_list:<br>        lst[5] = lst[5][:0] + <?php require ' + lst[5][0:]<br>        lst[5] = lst[5][: 1] + ' ?><br>                                                                        </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="list of lists">
<input type="button" onclick="showResults(this.value)" value="lists">
<input type="button" onclick="showResults(this.value)" value="loop">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create a Sqlite Virtual Table</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Example:<br>                                                             <br> CREATE VIRTUAL TABLE BookSearch USING fts5(ID, Title, Desc);<br> INSERT INTO BookSearch SELECT ID, Title, Desc FROM Book;<br>                                                             <br> Search like this:<br>                                                             <br> SELECT Title FROM BookSearch WHERE BookSearch MATCH 'cat';<br>                                                             <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="fts5">
<input type="button" onclick="showResults(this.value)" value="virtual">
<input type="button" onclick="showResults(this.value)" value="sqlite">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Find Replace Text Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To find and replace text in Vim, do the following:<br> Search entire file and replace immediately:<br>                                                    <br> :%s/foo/bar/g<br>                                                    <br> To confirm each substitution, use the c flag:<br>                                                    <br> :%s/foo/bar/gc<br>                                                    <br> Press y to replace the match or l to replace the<br> match and quit. Press n to skip the match and q<br> or Esc to quit substitution. The a option<br> substitutes the match and all remaining occurrences<br> of the match. To scroll the screen down, use<br> CTRL+Y, and to scroll up, use CTRL+E.<br>                                                     <br> replace with bar (y/n/a/q/l/^E/^Y)?<br>                                                     </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="find">
<input type="button" onclick="showResults(this.value)" value="replace">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Add just one item with mysql.connect</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> If you're extracting just one entry from the database, there is no<br> need cur.fetchall(), use cur.fetchone().</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="add one">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Markdown Viewer</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> To see a markdown file you're editing,<br> use the following command:<br>                                        <br> pandoc <file_name.md> | lynx  stdin<br>                                        <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="markdown">
<input type="button" onclick="showResults(this.value)" value="viewer">
<input type="button" onclick="showResults(this.value)" value="pandoc">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Python Remove Character from String using translate()</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> <br> Python string translate() function replace each character in the string<br> using the given translation table. We have to specify the Unicode code<br> point for the character and ‘None’ as a replacement to remove it from<br> the result string. We can use ord() function to get the Unicode code<br> point of a character.<br>                                                                          <br> s = 'abc12321cba'<br> print(s.translate({ord('a'): None}))<br> Output: bc12321cb<br>                                                                          <br> If you want to replace multiple characters, that can be done easily using<br> an iterator. Let’s see how to remove characters ‘a’, ‘b’ and ‘c’ from a<br> string.<br>                                                                           <br> s = 'abc12321cba'<br> print(s.translate({ord(i): None for i in 'abc'}))<br> Output: 12321<br>                                                                            <br> https://bit.ly/2MEM4xi<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="remove">
<input type="button" onclick="showResults(this.value)" value="string">
<input type="button" onclick="showResults(this.value)" value="characters">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See error in Vim linter</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To see all errors in Vim linter write:<br>                                       <br> :lopen<br>                                        </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="ale">
<input type="button" onclick="showResults(this.value)" value="linter">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Solve Connection Error python MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> If you're getting this error message:<br> “mysql.connector.errors.ProgrammingError: 1698 (28000):<br> Access denied for user 'root'@'localhost'”<br> I solved it doing what I show below.<br> Don't ask me what it does. I don't know either.<br>                                                                   <br> mysql  u root  p<br> USE mysql;<br> UPDATE user SET plugin='mysql_native_password' WHERE User ='root';<br> FLUSH PRIVILEGES;<br> exit;<br> systemctl restart mysql<br>                                                                    <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="connector">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Cmus Cheat-sheet</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>  Here are some cmus commands:<br>                                <br>  1   Library<br>  3   Playlist<br>  4   Queue<br>  5   File browser<br>  7   Settings<br>  a   next line down<br>  b   next track<br>  z   previous track<br>  c   pause/unpause<br>  s   shuffle<br>  y   add selection to playlist<br>  v   stop<br>     decrease volume<br>  +   increase volume<br>  4   View/edit queue<br>                               <br>  </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="cmus">
<input type="button" onclick="showResults(this.value)" value="player">
<input type="button" onclick="showResults(this.value)" value="music">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Check if string is in list of strings</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To check if a string/substring is contained in a list<br> of strings, use the following expression:<br>                                                       <br> word = <word_to_check><br> lst = [list of strings]<br> res = any(word in i for i in lst)<br>                                                        <br> This returns a boolean with value True if the string is<br> found inside the list, or False if not.<br> https://tinyurl.com/yzd2qjme</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="strings">
<input type="button" onclick="showResults(this.value)" value="belongs">
<input type="button" onclick="showResults(this.value)" value="string">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create Sqlite3 Table</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Example:<br>                                           <br> CREATE TABLE notes (<br> id INTEGER PRIMARY KEY,<br> title TEXT,<br> k1 TEXT,<br> k2 TEXT,<br> k3 TEXT,<br> note TEXT,<br> time DATETIME DEFAULT CURRENT_TIMESTAMP);<br>                                           <br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="sqlite">
<input type="button" onclick="showResults(this.value)" value="table">
<input type="button" onclick="showResults(this.value)" value="tables">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Setting Up a Nginx Server</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>   I'm trying out the Nginx web server instead of Apache because<br>   I've been hearing a lot about how much easier it is to<br>   configure, and that it's faster etc, etc. I can now say with<br>   authority, that is not easier to configure, it's harder, but<br>   it's a good harder, because makes you have more control about<br>   what you're setting up. So, I'll leave here the server block<br>   (Nginx version of Virtual Hosts), I made in 28/01/21, for a<br>   a blog called 'Dazed and Confused':<br>                                                               <br>   server {<br>          # Notice that, unlike Apache, you can't have the same<br>          # port for IPV4 and IPV6. So you'll have to comment it<br>          # out.<br>          listen 443 ssl;<br>          # listen [::]: 443 ssl;<br>  <br>          root /var/www/constantconstipation.club/html/public/;<br>          # Nginx serves what is described in the index files it<br>          # finds on the pages. <br>          index index.html index.htm index.nginx debian.html;<br>  <br>          server_name constantconstipation.club www.constantconstipation.club;<br>  <br>          location / {<br>                  try_files $uri $uri/ =404;<br>          }<br>          # Nginx wasn't finding the blog folder content, nor it's<br>          # css structure. So I inserted the 'try_files', and it<br>          # worked. The line's meaning is this:<br>          # 'Checks the existence of files in the specified order<br>          # and uses the first found file for request processing;<br>          # the processing is performed in the current context.<br>          # [...]<br>          # If none of the files were found, an internal redirect<br>          # to the uri specified in the last parameter is made.'<br>          location /blogs/ {<br>                  try_files $uri $uri/ =404;<br>          }<br>  <br>          # This is what is requested for ssl connection. Mind you,<br>          # this configuration is being used because, I already had<br>          # the certbot certificate and needed to change it from an<br>          # Apache server to Nginx. Probably if you download a<br>          # certbot version for Nginx, it will do all this<br>          # configuration for you. But if it doesn't, you can<br>          # copy/paste from the third row onward and it will run.<br>          # NOTE: in the last field, 'XSS Protection', I had to change<br>          # the double quotes that were to apostrophes, or mysql would<br>          # respond with an error. If you have any problems, just put<br>          # double quotes in it.<br>          ssl_certificate     /etc/letsencrypt/live/constantconstipation.club/fullchain.pem;<br>          ssl_certificate_key /etc/letsencrypt/live/constantconstipation.club/privkey.pem;<br>          ssl_protocols TLSv1.2;<br>          ssl_prefer_server_ciphers on;<br>          ssl_ciphers ECDHE RSA AES256 GCM SHA512:DHE RSA AES256 GCM SHA512:ECDHE RSA AES256 GCM SHA384:DHE RSA AES256 GCM SHA384:ECDHE RSA AES256 SHA384;<br>          ssl_ecdh_curve secp384r1; # Requires nginx >= 1.1.0<br>          ssl_session_timeout  10m;<br>          ssl_session_cache shared:SSL:10m;<br>          ssl_session_tickets off; # Requires nginx >= 1.5.9<br>          ssl_stapling on; # Requires nginx >= 1.3.7<br>          ssl_stapling_verify on; # Requires nginx => 1.3.7<br>          resolver 8.8.8.8 8.8.4.4 valid=300s;<br>          resolver_timeout 5s;<br>          add_header X Frame Options DENY;<br>          add_header X Content Type Options nosniff;<br>          add_header X XSS Protection '1; mode=block';<br>   }<br>                                                                    <br>   The whole process: https://do.co/3t7zmIr<br>   </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="nginx">
<input type="button" onclick="showResults(this.value)" value="web server">
<input type="button" onclick="showResults(this.value)" value="apache">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to read a file into a list</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>                                               <br> with open('C:/path/numbers.txt') as f:<br>     lines = f.read().splitlines()<br>                                              <br> this will give you a list of values (strings)<br> you had in your file, with newlines stripped.<br> https://bit.ly/38TxQ4y<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="list">
<input type="button" onclick="showResults(this.value)" value="file">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create a dictionary from two lists</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>  To create a dictionary from two lists, use the following<br> dictionary comprehension:<br>                                                          <br> list1 = ['Miguel', 'João', 'Mario']<br> list2 = [1, 4, 5]<br><br> new_dict = {list1[i]: list2[i] for i in range(len(list1))}<br>                                                           <br> https://tinyurl.com/yh3kc2sg</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="dictionary">
<input type="button" onclick="showResults(this.value)" value="lists">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Name of Current File in Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To get name of current file in Vim is %</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="current file">
<input type="button" onclick="showResults(this.value)" value="files">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Convert bytes to string</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To convert bytes to string, do the following:<br>                                              <br> x = b'El ni\xc3\xb1o come camar\xc3\xb3n'<br> s = x.decode()<br> print(s)<br>                                             <br> https://tinyurl.com/ygarcm8j</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="bytes">
<input type="button" onclick="showResults(this.value)" value="string">
<input type="button" onclick="showResults(this.value)" value="converter">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">See indentation errors</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> The error indentation error unindent does not match any<br> outer indentation level, is hard to solve because a lot<br> of times the error is found on the first line of the<br> file, not on the offendind line. To solve this, there is<br> this handy python function:<br>                                                         <br> python  tt <file name><br>                                                         </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="indentation">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="unindent">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Replace multiple characters at once</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To replace several characters at once, in a list or string,<br> do as in this example:<br>                                                            <br> res = test_str.replace('a', '%temp%').replace('b', 'a') \<br> .replace('%temp%', 'b')<br>                                                            </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="characters">
<input type="button" onclick="showResults(this.value)" value="list">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Nest 3 Levels of Quotations</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To nest three layers of quotations/apostrophes do this:<br>                                                        <br>   Nivel 1   Nivel 2 '  Nivel 3  '    <br>  |           |          |           |  |   |<br>  |           |          +           +  |   |<br>  |           |                         |   |<br>  |           +                         +   |<br>  |                                         |<br>  +                                         +<br>                                                        </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="quotation marks">
<input type="button" onclick="showResults(this.value)" value="apostrophes">
<input type="button" onclick="showResults(this.value)" value="quotations">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Solve remote HEAD refers to nonexistent ref error</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> If a repository is initiated with the default branch as main,<br> it generates the following error, when doing git clone:<br>                                                                <br> Remote HEAD refers to nonexistent ref, unable to checkout<br>                                                                <br> In this case, and contrary to what you'd expect to happen, the<br> solution is to revert to calling the default branch, master.<br> This can be done in this fashion:<br>                                                                <br> git branch  m main master<br> git push  u origin master<br> git push origin   delete main<br>                                                                <br> https://tinyurl.com/yg8jepvb</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="git">
<input type="button" onclick="showResults(this.value)" value="repository">
<input type="button" onclick="showResults(this.value)" value="git server">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Cmus Cheat-sheet</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">  <br>  COMMANDS<br>                                <br>  1   Library<br>  3   Playlist<br>  4   Queue<br>  5   File browser<br>  7   Settings<br>  a   next line down<br>  b   next track<br>  z   previous track<br>  c   pause/unpause<br>  s   shuffle<br>  y   add selection to playlist<br>  v   stop<br>     decrease volume<br>  +   increase volume<br>  4   View/edit queue<br>                               </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="cmus">
<input type="button" onclick="showResults(this.value)" value="player">
<input type="button" onclick="showResults(this.value)" value="music">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Delete several rows in MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To delete several rows from a MySQL db,<br> do this:<br>                                        <br> DELETE FROM <table_name> WHERE id > 6<br>                                        </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="delete">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="erase">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Creating a range of variables with numbers on them</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> For creating a range of variables with numbers, (something<br> like this: 'var0', or 'var_0') you do the following:<br>                                                           <br> for key in range(9):<br>    globals()['key_{}'.format(key)] = 'a'<br>                                                           <br> This will produce a set of variables, name thusly, 'key_0,<br> 'key_1' and so on, that will all have the value 'a'. But<br> that can be easily changed.<br> https://bit.ly/3oBeANz<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="numbered variables">
<input type="button" onclick="showResults(this.value)" value="range">
<input type="button" onclick="showResults(this.value)" value="variables with numbers">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Journalctl by PID</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To search journalctl by pid, say 2355,<br> do the following:<br>                                       <br>'sudo journalctl _PID=2355'<br>                                       <br></p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="journalctl">
<input type="button" onclick="showResults(this.value)" value="pid">
<input type="button" onclick="showResults(this.value)" value="search">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Install Arch Manually</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To install a aur package manually, do the this:<br>                                                      <br> Download the package,<br> Uncompress with unzstd name of compressed package<br> check the PKGBUILD to see what could be changed,<br> makepkg  si<br></p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="arch">
<input type="button" onclick="showResults(this.value)" value="source">
<input type="button" onclick="showResults(this.value)" value="aur">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Configure Vim</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To guarantee that the installation of Vim comes<br> with clipboard and python3 support, do this:<br>                                                                <br> 1   Install gtk4.<br>    1.1   Ubuntu: libgtk 4 dev<br>    1.2   Arch: gtk4<br> 2   Configure with the following flags:<br>    ./configure   with features=huge \<br>              enable multibyte \<br>              enable python3interp=yes \<br>              with python3 config dir=/usr/bin/python3 config \<br>              enable gui=gtk4 \<br>              enable cscope \<br>              enable fail if missing \<br>              prefix=/usr<br>                                                                </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="vim">
<input type="button" onclick="showResults(this.value)" value="configuration">
<input type="button" onclick="showResults(this.value)" value="clipboard">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Import variables from another file.</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> Much to my surprise, it's possible to import<br> a variable, and only that,if you want to,<br> from another module.<br> You just import it as you would a function:<br>                                            <br> from <other_file> import <variable_name><br>                                           <br> or<br>                                           <br> import <other_file><br>                                           <br> If you want access to everything.<br> I've tested it and it works OK. It might<br> need the creation of a __init__.py file, <br> but I don't think that's a thing right now.<br>                                           <br> https://tinyurl.com/yghg7v56</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="import">
<input type="button" onclick="showResults(this.value)" value="variables">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Select last row MySQL</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> SELECT fields FROM table ORDER BY id DESC LIMIT 1;<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="mysql">
<input type="button" onclick="showResults(this.value)" value="last row">
<input type="button" onclick="showResults(this.value)" value="rows">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Extract a filename from a path</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To extract a filename from a path in Python,<br> do this:<br>                                             <br> import os<br><br> filename = os.path.basename(<path/to/file>)<br> print(filename)<br>                                            </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="filename">
<input type="button" onclick="showResults(this.value)" value="extract">
<input type="button" onclick="showResults(this.value)" value="python">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Create a ordered dictionary</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> We can create ordered dictionary using OrderedDict<br> function in collections.<br>                                                    <br> ordered_d = collections.OrderedDict(one=1, two=2)<br>                                                    <br> or if you want a empty dictionary:<br>                                                    <br> ordered_d = collections.OrderedDict()<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="ordered dictionary">
<input type="button" onclick="showResults(this.value)" value="dictionary">
<input type="button" onclick="showResults(this.value)" value="ordered">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Dictionary Comprehensions</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> <br> <br> Dictionary comprehension is a method for transforming one dictionary<br> into another dictionary. During this transformation, items within<br> the original dictionary can be conditionally included in the new<br> dictionary and each item can be transformed as needed. This is the<br> general template you can follow for dictionary comprehension in<br> Python:<br>                                                                     <br> dict_variable = {key:value for (key,value) in dictonary.items()}<br>                                                                     <br> a simple dictionary comprehension:<br>                                                                     <br> dict1 = {'a': 1, 'b': 2, 'c': 3, 'd': 4, 'e': 5}<br> # Double each value in the dictionary<br> double_dict1 = {k:v*2 for (k,v) in dict1.items()}<br> print(double_dict1)<br> {'e': 10, 'a': 2, 'c': 6, 'b': 4, 'd': 8}<br>                                                                     <br> https://bit.ly/2Ysf4ev<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="comprehensions">
<input type="button" onclick="showResults(this.value)" value="dictionary">
<input type="button" onclick="showResults(this.value)" value="dictionaries">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Remove make "cc1: all warnings being treated as errors"</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To deal with the cc1: all warnings being treated as errors,<br> nuisance, search in Makefile for where it's defined the<br> Werror variable and erase it.<br> https://tinyurl.com/yeyhof9c</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="make">
<input type="button" onclick="showResults(this.value)" value="makefile">
<input type="button" onclick="showResults(this.value)" value="source">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Google Docstrings Guide</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> In order to have a better experience in documenting my<br> code, I'm going to use the formulation of Google's <br> Style Guide that, among other things, has pointers on<br> how to comment and how to write docstrings.<br> In short, the docstring structure is the following:<br>                                                       <br> <br> One line summary<br> <blank line><br> Extended summary (optional)<br> <blank line><br> Args:<br>    name: type, description<br> <blank line><br> Returns:<br>    name: type, description<br> Raises:<br>    Error Name: Error Message<br> <br>                                                      <br> https://tinyurl.com/yfpzlqoy</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="google">
<input type="button" onclick="showResults(this.value)" value="docstrings">
<input type="button" onclick="showResults(this.value)" value="documentation">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Alphabet in Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To access the alphabet, punctuation and numerals<br> in Python, do the following:<br>                                                  <br> import string<br><br> print(string.ascii_letters)<br> print(string.digits)<br> print(string.punctuation)<br>                                                   <br> https://tinyurl.com/y7339t85</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="alphabet">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="string">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">How to output an HTML page based on user input</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> In order to receive input from the user on a site<br> and do something with it, do the following:<br>                                                   <br> Here's a simple example:<br> <br> <!DOCTYPE html><br> <html><br>   <form method=GET action=my_result.php><br>     <input type=text name=my_value><br>     <input type=submit><br>   </form><br> </html><br> <br> Your second page (the results page) should bear the<br> name that you specified in the form's action<br> attribute.<br> This is the page which will need server side code.<br> So here is an example my_result.php:<br> <br> <!DOCTYPE html><br> <html><br>   <p><?php echo $_GET['my_value']; ?></p><br> </html><br>                                                        <br> If you want the output somewhere else, you can always<br> insert it in your HTML like this:<br>                                                        <br> <? include(results.php); ?><br>                                                        <br> https://bit.ly/3pYaNuu<br> https://bit.ly/3kllc2k<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="input">
<input type="button" onclick="showResults(this.value)" value="html">
<input type="button" onclick="showResults(this.value)" value="css">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Pyment</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To configure and prettify your docstrings,<br> use the following command:<br>                                           <br> pyment  w <file_name><br>                                           <br> https://github.com/dadadel/pyment</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="docstrings">
<input type="button" onclick="showResults(this.value)" value="documentation">
<input type="button" onclick="showResults(this.value)" value="pyment">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Execute Shell Commands in Remote Servers With Python</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> <br> Fabric is a high level Python library designed to execute<br> shell commands remotely over SSH.<br> Example taken from a script written to alter folder<br> permissions when updating content on the hugo blog server:<br>                                                            <br> from fabric import Connection<br> c = Connection(<br>     host = 'constantconstipation.club',<br>     user = 'root',<br>     connect_kwargs={<br>         'key_filename': '/home/mic/.ssh/id_rsa'<br>     }<br> )<br> c.run('cd /var/www/constantconstipation.club/html/ &&<br> chown  R www data:www data public')<br>                                                            <br> http://www.fabfile.org/<br> </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="fabric">
<input type="button" onclick="showResults(this.value)" value="remote">
<input type="button" onclick="showResults(this.value)" value="ssh">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">List Triggers in SQLite db</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"> select * from sqlite_master where type = 'trigger'; </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="triggers">
<input type="button" onclick="showResults(this.value)" value="sqlite">
<input type="button" onclick="showResults(this.value)" value="search">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Remove app completely in Arch</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To remove an app, along with its dependencies and<br> config files, use the following command:<br>                                                   <br> yay/pacman  Rsn <app_name><br>                                                   </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="remove">
<input type="button" onclick="showResults(this.value)" value="delete">
<input type="button" onclick="showResults(this.value)" value="arch">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Copy and Paste in Nano</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1">To copy/paste in nano, use the following commands: │<br>│  ALt a to set mark                                  │<br>│  Ctl k to cut                                       │<br>│  Ctl u to uncut in the same place                   │<br>│  Ctl u to uncut to new location</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="copy">
<input type="button" onclick="showResults(this.value)" value="paste">
<input type="button" onclick="showResults(this.value)" value="nano">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Append text to beginning of a file</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br>  This is an example of how to put text on beginning of<br>  file. No exemplo o text a inserir é 'task goes here.'<br>                                                        <br>  echo 'task goes here' | cat   todo.txt > temp && mv \<br>  temp todo.txt<br>                                                        <br>   https://tinyurl.com/yyhvrcaj</p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="bash">
<input type="button" onclick="showResults(this.value)" value="files">
<input type="button" onclick="showResults(this.value)" value="shell">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    <article class="center mw6 ba mv2 mb7">
<h1 class="f4 bg-near-black white mv0 pv2 ph3">Analyze a Python object</h1>
<div class="pa3 bt">
<p class="f6 f5-ns lh-copy measure mv0 mb1"><br> To look inside a Python object and see what is<br> made of, we can use the following functions:<br>                                               <br> type()<br> dir()<br> id()<br> getattr()<br> hasattr()<br> globals()<br> locals()<br> callable()<br>                                               </p>
</div>
</article>

                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">
<input type="button" onclick="showResults(this.value)" value="python">
<input type="button" onclick="showResults(this.value)" value="analyze">
<input type="button" onclick="showResults(this.value)" value="object">
</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    
            <div id="col3" class="flex-row items-center self-center justify-center content-center w-10 order-2">
            </div>
        </div>
    </div>

            <footer class="bottom-0 ph3 mid-gray absolute h1 w-100">
                <small class="f7-m db tc">© 2021 <b class="ttu">MCLDS</b>., All Rights Reserved ❰❱ mclds@protonmail.com</small>
            </footer>
        </div>
    </body>
</html>
            