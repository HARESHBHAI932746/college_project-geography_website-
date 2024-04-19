console.log("project 3");

let intag = document.getElementById('inputtag');

intag.addEventListener('keyup',filternames);

function filternames(){
  let inttagvalue = intag.value;
  let intagvaluinupper = inttagvalue.toUpperCase();

  let ul = document.getElementById('ul');
  let li = ul.querySelectorAll('li.lis');

  for (let i = 0; i < li.length; i++) {

    let a = li[i].getElementsByTagName('a')[0];

    if(a.innerHTML.toUpperCase().indexOf(intagvaluinupper) > -1){
      li[i].style.display = 'block';
      console.log(i);
    }
    
    else{        
      li[i].style.display = 'none';        
    }
  }
}
