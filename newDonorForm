<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Donor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="css/style.css" />
    <style>
    /* Style inputs */
    input[type=text], input[type=number],select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    }

    input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    /* Style the container/contact section */
    .container {
    border-radius: 5px;
    background-color: #FDF2E9;
    padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }
    }
    
</style>
</head>
<body>
    <nav  class="navbar navbar-expand-sm bg-danger navbar-dark">
  <div class="container-fluid">
  	<div class="container-header" >
      <a class="navbar-brand" href="home.php" style="padding-top:5px">
      <img src="./blood1.png" alt="Logo" style="width:50px">
      </a>
    </div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <ul class=" nav navbar-nav">
      <li><a href="home.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
      <li><a href="Donor.php">Donor</a></li>
      <li><a href="Patient.php">Patient</a></li>
      <li><a href="hospital.php"><i class="fa fa-fw fa-ambulance"></i>Hospital</a></li>
      <li><a href="bank.php"><i class="fa fa-fw fa-bank"></i>Bank</a></li>
      <li><a href="connections.php">Connections</a></li>
      <li><a href="available-bloods.php">Available Bloods</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">

	<li><a href="https://docs.google.com/document/d/e/2PACX-1vTwAxnodGn1_rCGv_5JvyuypP2RLgABIa_Fvftvc6xwXZYSiOTk8flJyuYd4OFZuGA7tBOcTxJK2r-Q/pub"></i>Help</a></li>
        <li><a href="aboutus.php"><i class="fa fa-fw fa-envelope"></i>contact us</a></li>
        </ul>
  </div>
</nav>

    <div class="container">
        <div style="text-align:center">
            <h2 style="color:#00006a">Add New Donor</h2>
        </div>
        <div class="row">
            <div class="column">
                <img src="donor.jpg" style="width:100%">
             </div>
             <div class="column">
             <form action="Donor.php" method="post">
                <label for="fname" style="color:#00006a">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Name..">
                <label for="lname" style="color:#00006a">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Last name..">
                <label for="dob" style="color:#00006a">Date of Birth(YYYY-MM-DD)</label>
<input id="fDOB" name="Father DOB" type="text"><input onclick="popupDatePicker(this.form.fDOB)" value="..." type="button">

For mannual input ....

<select name="DOBYear">
<option>- Year -</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>

</select><select name="DOBMonth">
<option>- Month -</option>
<option value="01">January</option>
<option value="02">Febuary</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>

</select><select name="DOBDay">
<option>- Day -</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

</select>
                <label for="phone" style="color:#00006a">Phone Number</label>
                <input type="number" id="phone" name="phone" placeholder="Phone Number..">
                    
                </select>
                <label for="bgroup" style="color:#00006a">Blood Group</label>
                <input type="text" id="bgroup" name="bgroup" placeholder="Blood Group..">
                <input type="submit" value="Add">
            </form>
            </div>
        </div>
    </div>
</body>
</html>
