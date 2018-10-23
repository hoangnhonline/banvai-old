function RefreshMe()
{
	parent.frames[1].document.location.replace('GetHCMSDataSmall.asp?id=x'.concat((new Date()).getTime()));		
}

/*function ShowTime()
{
	var v = (new Date());
	var h, m, s;

	h = v.getHours();
	m = v.getMinutes();
	s = v.getSeconds();

	//document.getElementById('Clock').innerHTML = "".concat((h < 10) ? '0'.concat(h) : h).concat(':').concat((m < 10) ? '0'.concat(m) : m).concat(':').concat((s < 10) ? '0'.concat(s) : s);
}*/

function UpdateItem(iName)
{
	document.getElementById(iName).innerHTML = parent.frames[1].document.getElementById(iName).innerHTML;
}

function UpdatePage()
{	
	var srow, drow, i, j;
	var stab = parent.frames[1].document.getElementById('tblSmallSource');
	var dtab = document.getElementById('QuoteRutGon');
	
	try
	{
		for (i = 0; i < stab.rows.length; i++)
		{
			srow = stab.rows[i];
			if (i >= dtab.rows.length) 
			{
				drow = dtab.insertRow(i);
				drow.height = 18;
				for (j = 0; j < srow.cells.length; j++) 
				{
					var celltmp = parent.frames[1].document.getElementById('tblSmallSource').rows[i].cells[j].innerHTML;
					cell = drow.insertCell(j);
					cell.style.width = 60;
					if (j==0) 
					{
						cell.className = 'S';
						cell.style.width = "55px";
						//cell.style.width = "39px";
					} 					
					else if(j==1)
					{
						cell.className = 'V';
						cell.style.width = "60px";
						//cell.style.width = "39px";
					}
					else if(j==2)
					{
						cell.className = 'V';
						cell.style.width = "60px";
					//	cell.style.width = "39px";
					}
					else if(j==3)
					{
						cell.className = 'V';
						cell.style.width = "55px";
					//	cell.style.width = "40px";
					}
					else if (j==4)
					{
						if (parseFloat(celltmp) == 0)
						{
							cell.className = 'Y';							
						}
						else if (parseFloat(celltmp) > 0)
						{
							cell.className = 'G';							
						}
						else if (parseFloat(celltmp) < 0)
						{
							cell.className = 'R';							
						}
						else
						{
							cell.className = 'Y';							
						}
						//cell.style.width = "36px";
						cell.style.width = "15px";
					}
					
					cell.innerHTML = '' + celltmp + '';
					
					if(j==4)
					{
						if(cell.innerHTML == '')
						{
							if(parseFloat(drow.cells[2].innerHTML) == parseFloat(drow.cells[1].innerHTML)) 
							{
								cell.innerHTML = '0';
								cell.className = 'Y';
							}
						}
					}
				}
			}
		}
	}	
	catch(err){}
}

RefreshMe();
/*ShowTime();*/
// var v = (new Date());
// if(v.getHours() >= 7 && v.getHours() <= 11)
// {
	// setInterval('RefreshMe()', 30000);
// }
//setInterval('ShowTime()', 1000);
