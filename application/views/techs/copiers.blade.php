@layout('layouts.whs')


@section('page_title')
WHS Staff Portal
@endsection

@section('content')

<!-------------------------------------------------
CUSTOM CONTENT BELOW THIS POINT
-------------------------------------------------->
<h1>Printer & Copier Details</h1>

<style type="text/css">

iframe{width:100%;min-height:400px;}
.frame-container{display:none;}
.no-web-access{background:#f34343;}

</style>
<table cellspacing="0" cellpadding="0" id="techs-printer-copier-ips" class="table">
  <thead>
    <tr>
      <th> Model </th>
      <th> Location </th>
      <th> IP </th>
      <th> Name </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>FX4112CP/BF</td>
      <td>Print Room</td>
      <td><a href="http://192.168.3.50">192.168.3.50</a></td>
      <td>Print Room Copier (B/W)</td>
    </tr>
    <tr>
      <td>APIIIC7600CPS</td>
      <td>Print Room</td>
      <td><a href="http://192.168.3.52">192.168.3.52</a></td>
      <td>Print Room Copier (Color)</td>
    </tr>
    <tr>
      <td>APIVC2270CPS/3T</td>
      <td>Art</td>
      <td><a href="http://192.168.3.54">192.168.3.54</a></td>
      <td>Art Copier 1 (Color)</td>
    </tr>
    <tr>
      <td>APIVC2270CPS/3T</td>
      <td>Art</td>
      <td><a href="http://192.168.3.56">192.168.3.56</a></td>
      <td>Art Copier 2 (Color)</td>
    </tr>
    <tr>
      <td>APIVC3371CPS/3T</td>
      <td>Staff Resource</td>
      <td><a href="http://192.168.3.58">192.168.3.58</a></td>
      <td>Staff Room Copier (Color)</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>International</td>
      <td><a href="http://192.168.3.60">192.168.3.60</a></td>
      <td>L Copier (Color)</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>M Block</td>
      <td><a href="http://192.168.3.62">192.168.3.62</a></td>
      <td>M Copier (Color)</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>B Block</td>
      <td><a href="http://192.168.3.64">192.168.3.64</a></td>
      <td>B Copier (Color)</td>
    </tr>
    <tr>
      <td>APIVC2270CPSF/3T</td>
      <td>Reception</td>
      <td><a href="http://192.168.3.66">192.168.3.66</a></td>
      <td>Admin Copier (Color)</td>
    </tr>
    <tr>
      <td>APIVC3371CPS/3T</td>
      <td>Library</td>
      <td><a href="http://192.168.3.68">192.168.3.68</a></td>
      <td>Library Copier (Color)</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>G Block</td>
      <td><a href="http://192.168.3.70">192.168.3.70</a></td>
      <td>G Copier (Color)</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>Computer Suite</td>
      <td><a href="http://192.168.3.72">192.168.3.72</a></td>
      <td>H Copier (Color)</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>Technology</td>
      <td><a href="http://192.168.3.74">192.168.3.74</a></td>
      <td>Technology Copier</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>E Block</td>
      <td><a href="http://192.168.3.76">192.168.3.76</a></td>
      <td>E Copier (Color)</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>C Block</td>
      <td><a href="http://192.168.3.78">192.168.3.78</a></td>
      <td>C Copier (Color)</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>F Block</td>
      <td><a href="http://192.168.3.80">192.168.3.80</a></td>
      <td>F Copier (Color)</td>
    </tr>
    <tr>
      <td>DCIVC2260CPS</td>
      <td>Deans Block</td>
      <td><a href="http://192.168.3.82">192.168.3.82</a></td>
      <td>Deans Copier (Color)</td>
    </tr>
    <tr>
      <td>APIVC2270CPSF/3T</td>
      <td>LB1</td>
      <td><a href="http://192.168.3.84">192.168.3.84</a></td>
      <td>LB1 Copier (Color)</td>
    </tr>
    <tr>
      <td>APIVC5570CPS/3T</td>
      <td>Student Centre</td>
      <td><a href="http://192.168.3.86">192.168.3.86</a></td>
      <td>Student Center Copier (Color)</td>
    </tr>
    <tr>
      <td>APIVC2270CPS/3T</td>
      <td>Photography</td>
      <td><a href="http://192.168.3.88">192.168.3.88</a></td>
      <td>Photography Copier (Color)</td>
    </tr>
    <tr>
      <td>DC286ST/TTML</td>
      <td>A8 Music</td>
      <td><a href="http://192.168.3.90">192.168.3.90</a></td>
      <td>A8 Copier (B/W)</td>
    </tr>
    <tr>
      <td>DC336ST/TTM/L</td>
      <td>A1 Maori</td>
      <td><a href="http://192.168.3.92">192.168.3.92</a></td>
      <td>A1 Copier (B/W)</td>
    </tr>
    <tr>
      <td>DC286ST/TTML</td>
      <td>S Block</td>
      <td><a href="http://192.168.3.94">192.168.3.94</a></td>
      <td>S Copier (B/W)</td>
    </tr>
    <tr>
      <td>DC286ST/TTML</td>
      <td>V Block?</td>
      <td><a href="http://192.168.3.96">192.168.3.96</a></td>
      <td>Automotive Copier (B/W)</td>
    </tr>
    <tr>
      <td>DC336ST/TTM/L</td>
      <td>Bursars</td>
      <td><a href="http://192.168.3.98">192.168.3.98</a></td>
      <td>Bursar Copier (B/W)</td>
    </tr>
    <tr>
      <td>DC286ST/2TL</td>
      <td>O Block Gym</td>
      <td><a href="http://192.168.3.100">192.168.3.100</a></td>
      <td>O Copier (B/W)</td>
    </tr>
    <tr>
      <td>DC336ST/TTM/L</td>
      <td>Computer Suite</td>
      <td><a href="http://192.168.3.102">192.168.3.102</a></td>
      <td>H1 Printer (B/W)</td>
    </tr>
    <tr>
      <td>DC336ST/TTM/L</td>
      <td>Computer Suite</td>
      <td><a href="http://192.168.3.103">192.168.3.103</a></td>
      <td>H2 Printer (B/W)</td>
    </tr>
    <tr>
      <td>DC336ST/TTM/L</td>
      <td>Computer Suite</td>
      <td><a href="http://192.168.3.104">192.168.3.104</a></td>
      <td>H3 Printer (B/W)</td>
    </tr>
    <tr>
      <td>DC336ST/2T</td>
      <td>Computer Suite</td>
      <td><a href="http://192.168.3.105">192.168.3.105</a></td>
      <td>H4 Printer (B/W)</td>
    </tr>
    <tr>
      <td>DC336ST/2T</td>
      <td>Computer Suite</td>
      <td><a href="http://192.168.3.106">192.168.3.106</a></td>
      <td>H5 Printer (B/W)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.107">192.168.3.107</a></td>
      <td>Admin 10 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.108">192.168.3.108</a></td>
      <td>Admin 2 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.109">192.168.3.109</a></td>
      <td>Admin 3 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.110">192.168.3.110</a></td>
      <td>Admin 4 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.111">192.168.3.111</a></td>
      <td>Admin 5 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.112">192.168.3.112</a></td>
      <td>Admin 6 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.113">192.168.3.113</a></td>
      <td>Admin 9 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>LSC</td>
      <td><a href="http://192.168.3.119">192.168.3.119</a></td>
      <td>Learning Support Centre Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.120">192.168.3.120</a></td>
      <td>F6 Office Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.121">192.168.3.121</a></td>
      <td>Admin 8 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.122">192.168.3.122</a></td>
      <td>Admin 1 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>Office</td>
      <td><a href="http://192.168.3.123">192.168.3.123</a></td>
      <td>C1 Office Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>G11</td>
      <td><a href="http://192.168.3.124">192.168.3.124</a></td>
      <td>G11 Printer (BW)</td>
    </tr>
    <tr>
      <td>P3160</td>
      <td>L4Pod</td>
      <td><a href="http://192.168.3.125">192.168.3.125</a></td>
      <td>L4 Pod Printer (BW)</td>
    </tr>
  </tbody>
</table>


@endsection


@section('footer')
@parent
@endsection

@section('scripts')
@parent

<script type="text/javascript">
$(document).ready(function(){
  $(window).load(function(){



    $("#techs-printer-copier-ips tr:not('.addedRow')").click(function(e)
    {

var $this = $(this);  //the clicked row
var $href = $this.find('a').attr('href'); //the a element within the row

if( $this.next().hasClass('addedRow') ){
  $this.next().find('div').slideToggle(function(){$this.next().remove();});
}
else{
  if($this.children(':first-child').text().match("DC(286|336)")){
    $this.after("<tr class='addedRow'><td colspan='4'><div class='frame-container'><iframe scrolling='yes' src='" + $href + "/sttnr.htm'></iframe></div></td></tr>").next().find('div').slideToggle();
  }
  else if($this.children(':first-child').text().match("P3160")){
    $this.after("<tr class='addedRow'><td colspan='4'><div class='frame-container no-web-access'>Printer doesnt support web access</div></td></tr>").next().find('div').slideToggle();
  }
  else{  $this.after("<tr class='addedRow'><td colspan='4'><div class='frame-container'><iframe scrolling='auto' src='" + $href + "/stsply.htm'></iframe></div></td></tr>").next().find('div').slideToggle();}
}
});


  });
});


</script>
@endsection


