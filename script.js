let $clearButton = document.querySelector('.dangerbutton');
let $inputs = document.querySelectorAll('.form-control');

$clearButton.addEventListener('click', () =>{
 
    $inputs.forEach(input=> input.value ='');


});