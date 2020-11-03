/*Name this external file gallery.js*/
function upDate(previewPic)
{
  document.getElementById('image').style.backgroundImage="url('"+previewPic.src+"')";
  document.getElementById('image').innerHTML=previewPic.alt;
  
}
function unDo()
{
  document.getElementById('image').style.backgroundImage="url('')";
  document.getElementById("image").innerHTML="Hover over a city above to display here.";	
  
}

function addressFunction()
{
  if (document.getElementById('same').checked)
  {
    var name = document.getElementById('shippingName').value;
    var zip = document.getElementById('shippingZip').value;
	
    document.getElementById('billingName').setAttribute('value', name);
    document.getElementById('billingZip').setAttribute('value', zip);
  }
  else
  {
    document.getElementById('billingName').removeAttribute('value');
    document.getElementById('billingZip').removeAttribute('value');
  }
}