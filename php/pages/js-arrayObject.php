<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
      <?php $navList = array("Nodeとは", "主なノードの種類", "element node", "attribute node", "Nodelist", "HTMLcollection", "HTML element", "要素の取得方法", "コピー方法"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
        <section class="ly-section tocContent">
            <h2><?php echo $navList[1]; ?></h2>
<pre class="prettyprint">
const array = [
    {
       property1:'vlaue',
       property2 : [
            {
               property2_1_1:'vlaue',
               property2_1_1:'vlaue2',
           },
            {
               property2_2_1:'vlaue',
               property2_2_2:'vlaue2',
           }
       ]
   },
   {
       property3:'vlaue',
       property4 : [
            {
               property4_1_1:'vlaue',
               property4_1_1:'vlaue2',
           },
            {
               property4_2_1:'vlaue',
               property4_2_2:'vlaue2',
           }
       ]
   }
];
</pre>
          </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
