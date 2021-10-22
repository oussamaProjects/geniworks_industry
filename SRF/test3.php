<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
</head>
<body>
<div class="customtable">
    <h2>DTL Payment Summary</h2>

    <!-- ------------------------- -->
    <!-- DROPDOWN - DATE SELECTION -->
    <!-- ------------------------- -->
    <select>
        <option value="">Current Pay Cycle: 12/01/2017 - 12/30/2017</option>
        <option value="">Prior Pay Cycle: 11/01/2017 - 11/30/2017</option>
        <option value="">Prior Pay Cycle: 10/01/2017 - 10/31/2017</option>
        <option value="">Prior Pay Cycle: 09/01/2017 - 09/30/2017</option>
    </select>
    <br /><br />

    <table class="MainTable">
        <!-- ------------ -->
        <!-- TABLE HEADER -->
        <!-- ------------ -->
        <tr>
            <td><h3 class="boldText">Level</h3></td>
            <td><h3 class="boldText">Members Using / Amount Percent</h3></td>
            <td><h3 class="boldText">Members Not Using / Amount Percent</h3></td>
            <td><h3 class="boldText">Pay Amount</h3></td>
        </tr>


        <!-- ----- -->
        <!-- ROW 1 -->
        <!-- ----- -->
        <tr>
            <td><p>1 (<a class="shownextrow" href="#">View Details</a>)</p></td>
            <td><p>23 / (12%)</p></td>
            <td><p>211 / (90%)</p></td>
            <td><p>$81.43</p></td>
        </tr>

        <!-- --------------- -->
        <!-- ROW 1 SUB TABLE -->
        <!-- --------------- -->
        <tr style="display:none">
            <td colspan="4">
                <table>
                    <tr>
                        <td colspan="3" class="SubTableHeader boldText"><p>Level 1</p></td>
                        <td colspan="2" class="SubTableHeader boldText"><p>Commission</p></td>
                    </tr>
                    <tr>
                        <td><p>Member</p></td>
                        <td><p>ID</p></td>
                        <td><p>Orig Trans</p></td>
                        <td><p>Merchant Paid</p></td>
                        <td><p>You Earned</p></td>
                    </tr>
                    <tr>
                        <td><p>John Doe</p></td>
                        <td><p>232223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/03/2017</p></td>
                        <td><p>$8.43</p></td>
                    </tr>
                    <tr>
                        <td><p>Sally Jone</p></td>
                        <td><p>442223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/05/2017</p></td>
                        <td><p>$12.43</p></td>
                    </tr>
                </table>
            </td>
        </tr>
        

        <!-- ----- -->
        <!-- ROW 2 -->
        <!-- ----- -->
        <tr>
            <td><p>2 (<a class="shownextrow" href="#">View Details</a>)</p></td>
            <td><p>43 / (22%)</p></td>
            <td><p>211 / (78%)</p></td>
            <td><p>$41.33</p></td>
        </tr>

        <!-- --------------- -->
        <!-- ROW 2 SUB TABLE -->
        <!-- --------------- -->
        <tr style="display:none">
            <td colspan="4">
                <table>
                    <tr>
                        <td colspan="3" class="SubTableHeader boldText"><p>Level 2</p></td>
                        <td colspan="2" class="SubTableHeader boldText"><p>Commission</p></td>
                    </tr>
                    <tr>
                        <td><p>Member</p></td>
                        <td><p>ID</p></td>
                        <td><p>Orig Trans</p></td>
                        <td><p>Merchant Paid</p></td>
                        <td><p>You Earned</p></td>
                    </tr>
                    <tr>
                        <td><p>John Doe</p></td>
                        <td><p>232223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/03/2017</p></td>
                        <td><p>$8.43</p></td>
                    </tr>
                    <tr>
                        <td><p>Sally Jone</p></td>
                        <td><p>442223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/05/2017</p></td>
                        <td><p>$12.43</p></td>
                    </tr>
                </table>
            </td>
        </tr>


        <!-- ----- -->
        <!-- ROW 3 -->
        <!-- ----- -->
        <tr>
            <td><p>3 (<a class="shownextrow" href="#">View Details</a>)</p></td>
            <td><p>23 / (10%)</p></td>
            <td><p>211 / (90%)</p></td>
            <td><p>$66.63</p></td>
        </tr>

        <!-- --------------- -->
        <!-- ROW 3 SUB TABLE -->
        <!-- --------------- -->
        <tr style="display:none">
            <td colspan="4">
                <table>
                    <tr>
                        <td colspan="3" class="SubTableHeader boldText"><p>Level 3</p></td>
                        <td colspan="2" class="SubTableHeader boldText"><p>Commission</p></td>
                    </tr>
                    <tr>
                        <td><p>Member</p></td>
                        <td><p>ID</p></td>
                        <td><p>Orig Trans</p></td>
                        <td><p>Merchant Paid</p></td>
                        <td><p>You Earned</p></td>
                    </tr>
                    <tr>
                        <td><p>John Doe</p></td>
                        <td><p>232223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/03/2017</p></td>
                        <td><p>$8.43</p></td>
                    </tr>
                    <tr>
                        <td><p>Sally Jone</p></td>
                        <td><p>442223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/05/2017</p></td>
                        <td><p>$12.43</p></td>
                    </tr>
                </table>
            </td>
        </tr>


        <!-- ----- -->
        <!-- ROW 4 -->
        <!-- ----- -->
        <tr>
            <td><p>4 (<a class="shownextrow" href="#">View Details</a>)</p></td>
            <td><p>23 / (10%)</p></td>
            <td><p>211 / (90%)</p></td>
            <td><p>$22.63</p></td>
        </tr>

        <!-- --------------- -->
        <!-- ROW 4 SUB TABLE -->
        <!-- --------------- -->
        <tr style="display:none">
            <td colspan="4">
                <table>
                    <tr>
                        <td colspan="3" class="SubTableHeader boldText"><p>Level 4</p></td>
                        <td colspan="2" class="SubTableHeader boldText"><p>Commission</p></td>
                    </tr>
                    <tr>
                        <td><p>Member</p></td>
                        <td><p>ID</p></td>
                        <td><p>Orig Trans</p></td>
                        <td><p>Merchant Paid</p></td>
                        <td><p>You Earned</p></td>
                    </tr>
                    <tr>
                        <td><p>John Doe</p></td>
                        <td><p>232223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/03/2017</p></td>
                        <td><p>$8.43</p></td>
                    </tr>
                    <tr>
                        <td><p>Sally Jone</p></td>
                        <td><p>442223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/05/2017</p></td>
                        <td><p>$12.43</p></td>
                    </tr>
                </table>
            </td>
        </tr>


        <!-- ----- -->
        <!-- ROW 5 -->
        <!-- ----- -->
        <tr>
            <td><p>5 (<a class="shownextrow" href="#">View Details</a>)</p></td>
            <td><p>23 / (10%)</p></td>
            <td><p>211 / (90%)</p></td>
            <td><p>$81.43</p></td>
        </tr>

        <!-- --------------- -->
        <!-- ROW 5 SUB TABLE -->
        <!-- --------------- -->
        <tr style="display:none">
            <td colspan="4">
                <table>
                    <tr>
                        <td colspan="3" class="SubTableHeader boldText"><p>Level 5</p></td>
                        <td colspan="2" class="SubTableHeader boldText"><p>Commission</p></td>
                    </tr>
                    <tr>
                        <td><p>Member</p></td>
                        <td><p>ID</p></td>
                        <td><p>Orig Trans</p></td>
                        <td><p>Merchant Paid</p></td>
                        <td><p>You Earned</p></td>
                    </tr>
                    <tr>
                        <td><p>John Doe</p></td>
                        <td><p>232223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/03/2017</p></td>
                        <td><p>$8.43</p></td>
                    </tr>
                    <tr>
                        <td><p>Sally Jone</p></td>
                        <td><p>442223</p></td>
                        <td><p>11/05/2017</p></td>
                        <td><p>12/05/2017</p></td>
                        <td><p>$12.43</p></td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- --------------------- -->
        <!-- FOOTER - TABLE TOTALS -->
        <!-- --------------------- -->
        <tr>
            <td><h3 class="boldText">Total:</h3></td>
            <td><h3 class="boldText">343</h3></td>
            <td><h3 class="boldText">211</h3></td>
            <td><h3 class="boldText">$231.43</h3></td>
        </tr>
    </table>
</div>
</body>
</html>