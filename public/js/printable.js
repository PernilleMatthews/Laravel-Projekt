function udskriv(printable) {
   let printContents = document.getElementById(printable).innerHTML;
   let originalContents = document.body.innerHTML;

   document.body.innerHTML = printContents;
   document.getElementById('name').style.color = 'black';
   window.print();
   document.body.innerHTML = originalContents;

}
