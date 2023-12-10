const image=document.querySelectorAll('.imagen');
for (let[i,imageSelected] of image.entries()) {
  imageSelected.addEventListener('mouseover',function focus(){
    resetFocus();
  imageSelected.classList.toggle('active');
  })
}
function resetFocus(){
    image.forEach(i =>i.classList.remove('active'));
}