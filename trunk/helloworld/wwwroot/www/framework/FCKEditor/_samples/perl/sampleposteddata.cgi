#!/usr/bin/env perl 

#####
#  FCKeditor - The text editor for internet
#  Copyright (C) 2003-2005 Frederico Caldeira Knabben
#  
#  Licensed under the terms of the GNU Lesser General Public License:
#  		http://www.opensource.org/licenses/lgpl-license.php
#  
#  For further information visit:
#  		http://www.fckeditor.net/
#  
#  File Name: sampleposteddata.cgi
#  	This page lists the data posted by a form.
#  
#  File Authors:
#  		Takashi Yamaguchi (jack@omakase.net)
#####

require '../../fckeditor.pl';

	if($ENV{'REQUEST_METHOD'} eq "POST") {
		read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
	} else {
		$buffer = $ENV{'QUERY_STRING'};
	}
	@pairs = split(/&/,$buffer);
	foreach $pair (@pairs) {
		($name,$value) = split(/=/,$pair);
		$value =~ tr/+/ /;
		$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
		$value =~ s/\t//g;
		$value =~ s/\r\n/\n/g;
		$FORM{$name} .= "\0"			if(defined($FORM{$name}));
		$FORM{$name} .= $value;
	}

	print "Content-type: text/html\n\n";
	print <<"_HTML_TAG_";
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
	<head>
		<title>FCKeditor - Samples - Posted Data</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex, nofollow">
		<link href="../sample.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>FCKeditor - Samples - Posted Data</h1>
		This page lists all data posted by the form.
		<hr>
		<table width="100%" border="1" cellspacing="0" bordercolor="#999999">
			<tr style="FONT-WEIGHT: bold; COLOR: #dddddd; BACKGROUND-COLOR: #999999">
				<td nowrap>Field Name&nbsp;&nbsp;</td>
				<td>Value</td>
			</tr>
_HTML_TAG_

	foreach $key (keys %FORM) {
		$postedValue = &specialchar_cnv($FORM{$key});
		print <<"_HTML_TAG_";
			<tr>
				<td valign="top" nowrap><b>$key</b></td>
				<td width="100%">$postedValue</td>
			</tr>
_HTML_TAG_
	}
		print <<"_HTML_TAG_";
		</table>
	</body>
</html>
_HTML_TAG_
