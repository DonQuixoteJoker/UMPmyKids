const icon = document.querySelector('.icon');
var search = document.querySelector('.search');
search.onmouseenter = function(){
    search.classList.toggle('active')
} 
function reset(){
    document.getElementById('mysearch').value = '';
}
 	search.onmouseleave = function(){
     search.classList.toggle('reset');
}
