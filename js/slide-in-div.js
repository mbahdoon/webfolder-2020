function script(){
     setTimeout(function(){
       alert("Hello to you from script function as a test");
         document.getElementByClassName('general-box').style.left = '1000px'; // new left position is 1000px in this example
     }, 2000); // 2000 = 2 seconds after page load
}
