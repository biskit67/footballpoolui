<html>
<?php include 'header2.php';
?>
<style>
li.collapsibleListOpen{
        list-style-image:url('minus-11.png');
        cursor:pointer;
}
li.collapsibleListClosed{
        list-style-image:url('plus-11.png');
        cursor:pointer;
 }

</style>
<div id="season">
<H2><FONT color=D000000>Season Standings</FONT></H2>
<ul class="collapsibleList">
    <li>2019
        <ul>
              <li><a href="fbseason-week12019.php">Week 1</a></li>
              <li><a href="fbseason-week22019.php">Week 2</a></li>
              <li><a href="fbseason-week32019.php">Week 3</a></li>
        </ul>
  </li>
</ul>
<ul>
    <li><a href="fbseason2018.php">Season 2018</a></li>
    <li><a href="fbseason2014.php">Season 2014</a></li>
</ul>
</div>
<H2><FONT color=D000000>Weekly Standings</FONT></H2>
<ul class="collapsibleList">
  </li>
    <li>2019
        <ul>
              <li><a href="fbstandings-week12019.php">Week 1</a></li>
              <li><a href="fbstandings-week22019.php">Week 2</a></li>
              <li><a href="fbstandings-week32019.php">Week 2</a></li>
        </ul>
  </li>
    <li>2018
        <ul>
              <li><a href="fbstandings-week0118.php">Week 1</a></li>
              <li><a href="fbstandings-week0218.php">Week 2</a></li>
              <li><a href="fbstandings-week0318.php">Week 3</a></li>
              <li><a href="fbstandings-week0418.php">Week 4</a></li>
              <li><a href="fbstandings-week0518.php">Week 5</a></li>
              <li><a href="fbstandings-week0618.php">Week 6</a></li>
              <li><a href="fbstandings-week0718.php">Week 7</a></li>
              <li><a href="fbstandings-week0818.php">Week 8</a></li>
              <li><a href="fbstandings-week0918.php">Week 9</a></li>
              <li><a href="fbstandings-week1018.php">Week 10</a></li>
              <li><a href="fbstandings-week1118.php">Week 11</a></li>
              <li><a href="fbstandings-week1218.php">Week 12</a></li>
              <li><a href="fbstandings-week1318.php">Week 13</a></li>
              <li><a href="fbstandings-week1418.php">Week 14</a></li>
              <li><a href="fbstandings-week1518.php">Week 15</a></li>
              <li><a href="fbstandings-week1618.php">Week 16</a></li>
              <li><a href="fbstandings-week1718.php">Week 17</a></li>
        </ul>

</ul>
    <script type="text/javascript">
window.onload = function () {
CollapsibleLists.apply();
}
const CollapsibleLists = (function(){

  // Makes all lists with the class 'collapsibleList' collapsible. The
  // parameter is:
  //
  // doNotRecurse - true if sub-lists should not be made collapsible
  function apply(doNotRecurse){

    [].forEach.call(document.getElementsByTagName('ul'), node => {

      if (node.classList.contains('collapsibleList')){

        applyTo(node, true);

        if (!doNotRecurse){

          [].forEach.call(node.getElementsByTagName('ul'), subnode => {
            subnode.classList.add('collapsibleList')
          });

        }

      }

    })

  }

  // Makes the specified list collapsible. The parameters are:
  //
  // node         - the list element
  // doNotRecurse - true if sub-lists should not be made collapsible
  function applyTo(node, doNotRecurse){

    [].forEach.call(node.getElementsByTagName('li'), li => {

      if (!doNotRecurse || node === li.parentNode){

        li.style.userSelect       = 'none';
        li.style.MozUserSelect    = 'none';
        li.style.msUserSelect     = 'none';
        li.style.WebkitUserSelect = 'none';

        li.addEventListener('click', handleClick.bind(null, li));

        toggle(li);

      }

    });

  }

  // Handles a click. The parameter is:
  //
  // node - the node for which clicks are being handled
  function handleClick(node, e){

    let li = e.target;
    while (li.nodeName !== 'LI'){
      li = li.parentNode;
    }

    if (li === node){
      toggle(node);
    }

  }

  // Opens or closes the unordered list elements directly within the
  // specified node. The parameter is:
  //
  // node - the node containing the unordered list elements
  function toggle(node){

    const open = node.classList.contains('collapsibleListClosed');
    const uls  = node.getElementsByTagName('ul');

    [].forEach.call(uls, ul => {

      let li = ul;
      while (li.nodeName !== 'LI'){
        li = li.parentNode;
      }

      if (li === node){
        ul.style.display = (open ? 'block' : 'none');
      }

    });

    node.classList.remove('collapsibleListOpen');
    node.classList.remove('collapsibleListClosed');

    if (uls.length > 0){
      node.classList.add('collapsibleList' + (open ? 'Open' : 'Closed'));
    }

  }

  return {apply, applyTo};

})();

    </script>



</body>
</html>
