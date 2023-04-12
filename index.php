<html>
<head>
<title>Visual Subnet Calculator</title>
<script src="subnet.js"></script>
<link rel="stylesheet" href="subnet.css">
</head>
<body>

<table width="100%">
<tr valign=top>
<td>

<h1>Visual Subnet Calculator</h1>

<p>Enter the network you wish to subnet:</p>

<form name="calc" onsubmit="updateNetwork(); return false;">

<table cellspacing="0">
<tr>
<td class="label">Network Address</td>
<td class="label">Mask bits</td>
</tr>
<tr>
<td><input type="text" name="network" size="15" maxlength="15" value="192.168.0.0"></td>
<td>/<input type="text" name="netbits" size="2" maxlength="2" value="24"></td>
<td><input type="submit" value="Update">
<input type="button" value="Reset" onclick="if (confirm('This will reset all subnet divisions you have made. Proceed?')) startOver();">
</td>
</tr>
</table>

<p>Show columns: 
<input type="checkbox" id="cb_subnet" checked onclick="toggleColumn(this)"><label for="cb_subnet">Subnet address</label>
<input type="checkbox" id="cb_netmask" onclick="toggleColumn(this)"><label for="cb_netmask">Netmask</label>
<input type="checkbox" id="cb_range" checked onclick="toggleColumn(this)"><label for="cb_range">Range of addresses</label>
<input type="checkbox" id="cb_useable" checked onclick="toggleColumn(this)"><label for="cb_useable">Useable IPs</label>
<input type="checkbox" id="cb_hosts" checked onclick="toggleColumn(this)"><label for="cb_hosts">Hosts</label>
<input type="checkbox" id="cb_divide" checked onclick="toggleColumn(this)"><label for="cb_divide">Divide</label>
<input type="checkbox" id="cb_join" checked onclick="toggleColumn(this)"><label for="cb_join">Join</label>
</p>
</form>

<p>Click below to split and join subnets.<br>
If you wish to save this subnetting for later, bookmark <a href="subnets.html" id="saveLink">this hyperlink</a>.</p>

</td>

</tr>
</table>

<br>
<hr noshade color="black" size="1">
<br>

<table class="calc" cellspacing="0" cellpadding="2">
<thead>
<tr>
<th id="subnetHeader">Subnet address</th>
<th id="netmaskHeader">Netmask</th>
<th id="rangeHeader">Range of addresses</th>
<th id="useableHeader">Useable IPs</th>
<th id="hostsHeader">Hosts</th>
<th id="divideHeader">Divide</th>
<th id="joinHeader">Join</th>
</tr>
</thead>
<tbody id="calcbody">
<!--tr>
<td>130.94.203.0/24</td>
<td>130.94.203.0 - 130.94.203.255</td>
<td>130.94.203.1 - 130.94.203.254 (254)</td>
<td>Divide</td>
</tr-->
</tbody>
</table>

</body>
</html>
