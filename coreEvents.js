window.onload = function() {
   var fnNavMouseOver = function()
          {
              this.style.backgroundColor = "#777777";
          };

   var fnNavMouseOut = function()
          {
              this.style.backgroundColor = "#000000";
          };

   /* Change all of the navigation list items to have the same mouseover/out function*/
   var navItems = document.getElementById("nav").getElementsByTagName("li");

   for (var i = 0; i < navItems.length; i++) {
      navItems[i].onmouseover = fnNavMouseOver;
      navItems[i].onmouseout = fnNavMouseOut;
   }


}