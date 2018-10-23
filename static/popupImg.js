var ppimgNW;
function popupImage(src, note, title, css, border) {
  if (border==null) border = 1;
  if (note==null) note = '';
  if(title==null) title='';
  if (ppimgNW != null) ppimgNW.close();

  ppimgNW = window.open('','POPUPIMAGE','scrollbars=1,toolbar=0,width=1,height=1left='.concat((screen.width)/2).concat(',top=').concat((screen.height-500)/2));
  var doc = ppimgNW.document;
  doc.write('<html>');
  doc.write('<head>');

  doc.write('<title>'+ 'Thong tin chi tiet' +'</title>');
  doc.write('<style> body {'+css+'} #ppImgText{'+ css +'} #ppImg{cursor:hand}</style></head>');
  doc.write('<body leftmargin="0" topmargin="' + border + '" onload="doResize();">');
  doc.write('<div align="center">');
  doc.write('<img src="' + src + '" id="ppImg" onclick="self.close();" title="nhấn vào ảnh để đóng cửa sổ !">');
  doc.write('</div>');
  doc.write('<div id="ppImgText" align="center"><strong> ');
  doc.write(note);
  doc.write('</strong><br>')
  doc.write(title);
  doc.write('</div>');
  doc.write('<div align="center">');
  doc.write('</body>');
  doc.write('</html>');

  doc.write('<' + 'script>');
  doc.write('function doResize() {');
  doc.write('  try { var imgW = ppImg.width, imgH = ppImg.height + 47;');     
  doc.write('  window.resizeTo(imgW + 80 +' + border*2 +', imgH + ppImgText.offsetHeight + 36 + '+ border*2 +');');
  doc.write('  setTimeout(\'doResize()\', 500); } catch (ex) {} ');
  doc.write('}');
  doc.write('doResize(); ');
  doc.write('</' + 'script>');


}