@extends('master')

@section('sidebar')
  <script type="text/javascript">
      $(document).ready(function(){
        // $('.createMemberForm').validate({
        //   groups: {
        //     nameGroup: 'day month year'
        //   },

        //   rules: {
        //     fullname: 'required',
        //     email: 'required',
        //     ic: 'required',
        //     password: {
					   //   required : true,
					   //   minlength: 5
        //      },
        //      confirmpassword: {
        //       required  : true,
        //        minlength: 5,
        //        equalTo: ".password"
        //      },
        //      mobile: 'required',
        //      day: 'required',
        //      month : 'required',
        //      year: 'required',
        //      address: 'required',
        //      gender: 'required',
        //      marital: 'required',
        //      state: 'required',
        //     postcode: 'required',
        //   },

        //     messages: {
        //       fullname:'Full Name is required.',
        //       email:'E-mail is required.',
        //       ic: 'Please enter your NRIC',
        //       password: {
        //          required : 'Password is required.',
        //          minlength: 'PASSWORD is CASE SENSITIVE and must be a minimum of six (6) characters & not more than (20) characters.'
        //        },
        //        confirmpassword: {
        //         required  : 'Confirm Password is required.',
        //          equalTo: "These passwords don't match"
        //        },
        //        mobile: 'Mobile Number is required',
        //       //  day: 'Please enter your date of birth',
        //       //  month: 'Please enter your date of birth',
        //       //  year: 'Please enter your date of birth',
        //        address:  'Please enter your full mailing address (minimum 10 letters and numbers)',
        //        gender: 'Please select your gender',
        //        marital:'Please select your marital',
        //        state: 'Please select your state',
        //        postcode:'Please enter your postcode with at least 3 characters'
        //   },

        //   errorPlacement: function(error, element) {
        //     var name = element.prop("name");
        //     console.log(name);
        //     if (name === "month" || name === "day" || name === "year") {
        //       error.insertAfter("select[name='year']");
        //       console.log('gg');
        //     } else {
        //       error.insertAfter(element);
        //         //  console.log('gg');
        //     }
        //   }
        // });

      });

  </script>

  {{Form::open([ 'method'=> 'post', 'class'=> 'createMemberForm'])}}
  <div class="">
    <p>SECTION 1: LOGIN DETAILS</p>
    <input type="text" name="fullname" value=""   placeholder="full name">
    <input type="email" name="email" value=""   placeholder="email">
    <input type="text" name="ic" value="" placeholder="ic" pattern="^\d{6}-\d{2}-\d{4}$"   />
    <input class="password" type="password" name="password" value="" placeholder="password"  >
    <input type="password" name="confirmpassword" value="" placeholder="confirm password"  >
    <input type="text" name="mobile" value="" placeholder="mobile no." >
  </div>
  <div class="">
    <p>SECTION 2: MEMBER PROFILE</p>
    <select name="day" id="" class="" pla="" >
		<option value="">-Day-</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
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
  <select name="month" id="" class=" ">
		<option value="">-Month-</option>
		<option value="01">Jan</option>
		<option value="02">Feb</option>
		<option value="03">Mar</option>
		<option value="04">Apr</option>
		<option value="05">May</option>
		<option value="06">Jun</option>
		<option value="07">Jul</option>
		<option value="08">Aug</option>
		<option value="09">Sep</option>
		<option value="10">Oct</option>
		<option value="11">Nov</option>
		<option value="12">Dec</option>
	</select>

  <select name="year" id="" class="" pla="" >
		<option value="">-Year-</option>
		<option value="1923">1923</option>
		<option value="1924">1924</option>
		<option value="1925">1925</option>
		<option value="1926">1926</option>
		<option value="1927">1927</option>
		<option value="1928">1928</option>
		<option value="1929">1929</option>
		<option value="1930">1930</option>
		<option value="1931">1931</option>
		<option value="1932">1932</option>
		<option value="1933">1933</option>
		<option value="1934">1934</option>
		<option value="1935">1935</option>
		<option value="1936">1936</option>
		<option value="1937">1937</option>
		<option value="1938">1938</option>
		<option value="1939">1939</option>
		<option value="1940">1940</option>
		<option value="1941">1941</option>
		<option value="1942">1942</option>
		<option value="1943">1943</option>
		<option value="1944">1944</option>
		<option value="1945">1945</option>
		<option value="1946">1946</option>
		<option value="1947">1947</option>
		<option value="1948">1948</option>
		<option value="1949">1949</option>
		<option value="1950">1950</option>
		<option value="1951">1951</option>
		<option value="1952">1952</option>
		<option value="1953">1953</option>
		<option value="1954">1954</option>
		<option value="1955">1955</option>
		<option value="1956">1956</option>
		<option value="1957">1957</option>
		<option value="1958">1958</option>
		<option value="1959">1959</option>
		<option value="1960">1960</option>
		<option value="1961">1961</option>
		<option value="1962">1962</option>
		<option value="1963">1963</option>
		<option value="1964">1964</option>
		<option value="1965">1965</option>
		<option value="1966">1966</option>
		<option value="1967">1967</option>
		<option value="1968">1968</option>
		<option value="1969">1969</option>
		<option value="1970">1970</option>
		<option value="1971">1971</option>
		<option value="1972">1972</option>
		<option value="1973">1973</option>
		<option value="1974">1974</option>
		<option value="1975">1975</option>
		<option value="1976">1976</option>
		<option value="1977">1977</option>
		<option value="1978">1978</option>
		<option value="1979">1979</option>
		<option value="1980">1980</option>
		<option value="1981">1981</option>
		<option value="1982">1982</option>
		<option value="1983">1983</option>
		<option value="1984">1984</option>
		<option value="1985">1985</option>
		<option value="1986">1986</option>
		<option value="1987">1987</option>
		<option value="1988">1988</option>
		<option value="1989">1989</option>
		<option value="1990">1990</option>
		<option value="1991">1991</option>
		<option value="1992">1992</option>
		<option value="1993">1993</option>
		<option value="1994">1994</option>
		<option value="1995">1995</option>
		<option value="1996">1996</option>
		<option value="1997">1997</option>
		<option value="1998">1998</option>
		<option value="1999">1999</option>
		<option value="2000">2000</option>
		<option value="2001">2001</option>
		<option value="2002">2002</option>
		<option value="2003">2003</option>
		<option value="2004">2004</option>
		<option value="2005">2005</option>
		<option value="2006">2006</option>
		<option value="2007">2007</option>
		<option value="2008">2008</option>
		<option value="2009">2009</option>
		<option value="2010">2010</option>
		<option value="2011">2011</option>
		<option value="2012">2012</option>
		<option value="2013">2013</option>
		<option value="2014">2014</option>
		<option value="2015">2015</option>
		<option value="2016">2016</option>
		<option value="2017">2017</option>
	</select>

  <select class="" name="gender" >
    <option value="">select gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>



<textarea name="address" rows="8" cols="80" placeholder="address"  ></textarea>
<select class="" name="marital"  >
  <option value="">Select marital</option>
  <option value="single">Single</option>
  <option value="married">Married</option>
</select>
<select name="state" id="" class="" pla=""  >
		<option value="" >STATE -Select State-</option>
		<option value="1">Johor</option>
		<option value="2">Kedah</option>
		<option value="3">Kelantan</option>
		<option value="4">Melaka</option>
		<option value="5">Negeri Sembilan</option>
		<option value="6">Pahang</option>
		<option value="7">Perak</option>
		<option value="8">Perlis</option>
		<option value="9">Penang</option>
		<option value="10">Sabah</option>
		<option value="11">Sarawak</option>
		<option value="12">Selangor</option>
		<option value="13">Terengganu</option>
		<option value="14">Kuala Lumpur</option>
		<option value="15">Labuan</option>
		<option value="16">Putrajaya</option>
		<option value="17">Others</option>
	</select>
<input type="text" name="postcode" value="" placeholder="Postcode"  >
  </div>

  <div class="">
    <input type="checkbox" name="term" value=""  >
    <label for="">bla bla bla</label>
  </div>

  <input type="submit" name="" value="Submit">
  {{Form::close()}}

@endsection
