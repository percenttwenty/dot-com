<?php
	$totalscore = 0;

	#1
	if ($_POST['P01'] == "A") $totalscore += substr(time(), -3, -1);
	else $totalscore += substr(time(), -4, -2);
	
	#2
	$totalscore += ord($_POST['P02']);

	#3
	if ($_POST['P03'] == "Yes") $totalscore += 30;
	else $totalscore += 10;
	
	#4
	if ($_POST['P04'] == "your mom") $totalscore += 1000;
	elseif ($_POST['P04'] == "goatz") $totalscore += 1200;
	elseif ($_POST['P04'] == "") $totalscore -= 1000;
	else $totalscore += strlen($_POST['P04']);
	
	#5
	$totalscore += $_POST['P05a'];
	$totalscore -= $_POST['P05b'];
	$totalscore += (2 * $_POST['P05c']);

	#6
	if ($_POST['P06'] == "") $totalscore = -100;
	else $totalscore += (23 + rand(10, 100));
	
	#7
	if (($_POST['P07a'] == "F") && ($_POST['P07b'] == "U")) $totalscore += 1000;
	if (($_POST['P07a'] == "K") && ($_POST['P07b'] == "R")) $totalscore += 10000;
	else $totalscore -= 200;
	
	#8
	$totalscore += (10 * strlen($_POST['P08']));
	
	#9
	$totalscore -= (10 * strlen($_POST['P08']));
	
	#10
	if ($_POST['P10'] == "Canna di Fucile") $totalscore += 300;
	elseif ($_POST['P10'] == "Burgundy Mirage") $totalscore += 150;
	elseif ($_POST['P10'] == "Ocelot Cream") $totalscore += 160;
	elseif ($_POST['P10'] == "Merillion Cyan") $totalscore += 420;
	elseif ($_POST['P10'] == "Verde Scuro Metallico") $totalscore += 500;
	
	#11
	if ($_POST['P11'] == "farts") $totalscore *= 2;
		
	
?>
<HTML>
<HEAD>
<TITLE>S.E.R.V.E. - Prove Your Worth results</TITLE>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</SCRIPT>
</HEAD>
<BODY BGCOLOR=BLACK TEXT="#CCCCCC" TOPMARGIN=0 LEFTMARGIN=0 MARGINHEIGHT=0 MARGINWIDTH=0  ONLOAD="MM_preloadImages('../images/internal_nav_over_06.gif','../images/internal_nav_over_07.gif','../images/internal_nav_over_08.gif','../images/internal_nav_over_09.gif','../images/internal_nav_over_10.gif','../images/submit_over.gif')">
<CENTER>
	<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0>
	<TR><TD COLSPAN=7><A HREF="../index.htm"><IMG SRC="../images/internal_nav_02.gif" BORDER=0></A></TD></TR>
	<TR>
		<TD><A HREF="../index.htm"><IMG SRC="../images/internal_nav_04.gif" ALT="" BORDER=0></A></TD>
		<TD><A HREF="../prove.htm"><IMG SRC="../images/internal_nav_over_05.gif" ALT="Prove Your Worth" BORDER=0></A></TD>
		
      <TD><A HREF="../lore.htm" ONMOUSEOUT="MM_swapImgRestore()" ONMOUSEOVER="MM_swapImage('lore','','../images/internal_nav_over_06.gif',1)"><IMG SRC="../images/internal_nav_06.gif" ALT="Lore" NAME="lore" WIDTH="70" HEIGHT="31" BORDER="0"></A></TD>
		
      <TD><A HREF="../inner.htm" ONMOUSEOUT="MM_swapImgRestore()" ONMOUSEOVER="MM_swapImage('inner','','../images/internal_nav_over_07.gif',1)"><IMG SRC="../images/internal_nav_07.gif" ALT="Inner Circle" NAME="inner" WIDTH="124" HEIGHT="31" BORDER="0"></A></TD>
		
      <TD><A HREF="../members.htm" ONMOUSEOUT="MM_swapImgRestore()" ONMOUSEOVER="MM_swapImage('members','','../images/internal_nav_over_08.gif',1)"><IMG SRC="../images/internal_nav_08.gif" ALT="Members Only" NAME="members" WIDTH="135" HEIGHT="31" BORDER="0"></A></TD>
		
      <TD><A HREF="../conditioning.htm" ONMOUSEOUT="MM_swapImgRestore()" ONMOUSEOVER="MM_swapImage('conditioning','','../images/internal_nav_over_09.gif',1)"><IMG SRC="../images/internal_nav_09.gif" ALT="Conditioning" NAME="conditioning" WIDTH="128" HEIGHT="31" BORDER="0"></A></TD>
		
      <TD><A HREF="../contact.htm" ONMOUSEOUT="MM_swapImgRestore()" ONMOUSEOVER="MM_swapImage('contact','','../images/internal_nav_over_10.gif',1)"><IMG SRC="../images/internal_nav_10.gif" ALT="Contact Us" NAME="contact" WIDTH="113" HEIGHT="31" BORDER="0"></A></TD>
	</TR>
	<TR>
		<TD><A HREF="../index.htm"><IMG SRC="../images/internal_nav_11.gif" ALT="" BORDER=0></A></TD>
		<TD COLSPAN=6></TD>
	</TR>
	</TABLE>
	<BR>
	<FONT FACE="Arial" SIZE=4>Congratulations and welcome...</FONT>
	<BR><BR>
	<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0>
	<TR>
		<TD WIDTH="30%"><BR></TD>
		<TD WIDTH="40%" ALIGN=CENTER>
			<FONT FACE="Arial" SIZE=2>
			You, sir or madame, have arrived at a page only seen by (web counter number) humans before you.  This means you are among the elite, the amazing, the proud - the members of SERVE.  What does this mean?  Everything.  You have gained the right to be known in academic and social circles as a member of the most fantastical private society for lovers of mysterious and astounding pastimes.  This membership will not provide you with discounts or access to mundane discotheques - no.  Rather, it is something you can carry with you in your heart, mind and wallet to remind you of the fact that you are exceptional person with an intellect superior everyone around you.  Good tidings!
		<P>Your PQ is <?=$totalscore?>.  This means you are ready to SERVE.
			</FONT>
		</TD>
		<TD WIDTH="30%"></TD>
	</TR>
	</TABLE>

	<BR>
	<IMG SRC="../images/home_18.gif" ALT="">
	<BR><BR>
	<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0>
	<TR>
		<TD WIDTH="30%"><BR></TD>
		<TD WIDTH="40%" ALIGN=CENTER>

		</TD>
		<TD WIDTH="30%"></TD>
	</TR>
	</TABLE>
	<BR>
	<IMG SRC="../images/home_18.gif" ALT="">
	<BR><BR>
	<BR><BR>
</CENTER>
</BODY>
</HTML>