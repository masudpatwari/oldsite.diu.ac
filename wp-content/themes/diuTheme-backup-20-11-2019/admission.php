<?php
/*
Template Name: Admission
*/
get_header(); ?>
<script>
    window.location = 'https://admission.diu.ac';
</script>
  <section class="banner">

		<ul class="banner-list admission">
			<li style="background:url(<?php bloginfo('template_url');?>/images/admission-banner-images.jpg)no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<h5 class="tag-line"></h5>
							<h5 class="banner-head">Admission Information</h5>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h6 class="admission-common-small-head">ADMISSION INFORMATION</h6>
				<h6 class="admission-common-head"><span class="add-elg-icon"></span>Admission <br/>Eligibility</h6>
				<p class="professitional-short-para">Candidates seeking admission must apply in prescribed application Form which can be collected on payment of Tk. 1000.00 Candidates having 2nd division or at least GPA 2.50 in both SSC & HSC examinations, or their equivalents are eligible to apply for admission into Honours program in Law,English, Sociology and Business Administration. For B.Sc in (Computer Science & Engineering), B.Sc.( Electrical, Electronics and Telecommunication Engineering) and  B.Sc (Civil Engineering) programs, candidate must have physics & Mathematics at their HSC level.For Bachelor of Pharmacy (B.Pharm.) program, candidates must have Biology & Chemistry at their HSC level.For LL.M (2 years), M.A English (2.5 Years), MSS Sociology (2 Years), MHRL, and MBA programs, the applicants must have at least Bachelor Degree with GPA-2.00 (minimum). For LL.M (2 Years), student must complete LL.B (Pass) Course.</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h6 class="admission-common-small-head">ADMISSION INFORMATION</h6>
				<h6 class="admission-common-head"><span class="add-elg-icon"></span>Required<br/>Documents</h6>
				<h5 class="required-document-head">For Undergraduate/ Honors Program:</h5>
				<ul class="required-document-list">
					<li>Original Transcript & Certificate of S.S.C. or Equivalent with 2  photocopies.</li>
					<li>Original Transcript & Certificate of H.S.C. or Equivalent with 2  photocopies.</li>
					<li>7 Copies of Pass Port size Photograph .</li>
				</ul>
				<h5 class="required-document-head">For Master’s / Graduate Program:</h5>
				<ul class="required-document-list">
					<li>Original Transcript & Certificate of S.S.C. or Equivalent with 2  photocopies.</li>
					<li>Original Transcript & Certificate of H.S.C. or Equivalent with 2  photocopies.</li>
					<li>Original Transcript & Certificate of Undergraduate/ Honor’s Program with 2 photocopies.</li>
					<li>7 Copies of Pass Port size Photograph .</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h6 class="admission-common-small-head">ADMISSION INFORMATION</h6>
				<h6 class="admission-common-head"><span class="add-elg-icon"></span>Tuition Fee</h6>
				<h5 class="Tuition-document-head">For Undergraduate/ Honors Program:</h5>
				<p class="professitional-short-para">(Tuition fee may be changed as per instruction of the authority.)</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="course-box">
					<label>Courses</label>
					<div class="selection-box">
						<select id="faculty-list">
							<option value="law">Faculty of Law</option>
							<option value="business">Faculty of Business Studies</option>
							<option value="arts">Faculty of Arts and Social Sciences</option>
							<option value="engineering">Faculty of Science and Engineering</option>
							<option value="phamacy">Faculty of Pharmacy</option>
						</select>
					</div>
				</div>
				<div class="table-box-new active" id="law">
					<table class="table courses-cost-common-table">
						<thead>
							<tr>
								<th>Sl. No.</th>
								<th>Name of Courses</th>
								<th>Duration</th>
								<th>Credit</th>
								<th>Total Fees (BDT)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="5">
									<h3 class="department-head">Faculty of Law</h3>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>LL.B (Hons Day)</td>
								<td>4 years	</td>
								<td>126</td>
								<td>3,50,000.00</td>
							</tr>

							<tr>
								<td>2</td>
								<td>LL.M</td>
								<td>1 year</td>
								<td>36</td>
								<td>70,000.00</td>
							</tr>
							<tr>
								<td>3</td>
								<td>LL.M</td>
								<td>2 years</td>
								<td>65</td>
								<td>85,000.00</td>
							</tr>
							<tr>
								<td>4</td>
								<td>MHRL</td>
								<td>2 years</td>
								<td>54</td>
								<td>60,000.00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-box-new" id="business">
					<table class="table courses-cost-common-table">
						<thead>
							<tr>
								<th>Sl. No.</th>
								<th>Name of Courses</th>
								<th>Duration</th>
								<th>Credit</th>
								<th>Total Fees (BDT)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="5">
									<h3 class="department-head">Faculty of Business Studies</h3>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>BBA (Day)</td>
								<td>4 years	</td>
								<td>126</td>
								<td>3,80,000.00</td>
							</tr>
							<tr>
								<td>2</td>
								<td>BBA (Evening)</td>
								<td>4 years	</td>
								<td>126</td>
								<td>3,00,000.00</td>
							</tr>
							<tr>
								<td>3</td>
								<td>MBA</td>
								<td>1 year</td>
								<td>36</td>
								<td>1,00,000.00</td>
							</tr>
							<tr>
								<td>4</td>
								<td>MBA</td>
								<td>2 years	</td>
								<td>66</td>
								<td>1,20,000.00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-box-new" id="arts">
					<table class="table courses-cost-common-table">
						<thead>
							<tr>
								<th>Sl. No.</th>
								<th>Name of Courses</th>
								<th>Duration</th>
								<th>Credit</th>
								<th>Total Fees (BDT)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="5">
									<h3 class="department-head">Faculty of Arts and Social Sciences</h3>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>B.A (Hons) in English (Day)</td>
								<td>4 years	</td>
								<td>120</td>
								<td>2,00,000.00</td>
							</tr>
							<tr>
								<td>2</td>
								<td>B.A (Hons) in English (Eve)</td>
								<td>4 years	</td>
								<td>120</td>
								<td>1,80,000.00	</td>
							</tr>
							<tr>
								<td>3</td>
								<td>M.A in English (Eve)</td>
								<td>1 years	</td>
								<td>36</td>
								<td>65,000.00</td>
							</tr>
							<tr>
								<td>4</td>
								<td>M.A in English</td>
								<td>2.5 years</td>
								<td>66</td>
								<td>70,000.00</td>
							</tr>
							<tr>
								<td>5</td>
								<td>BSS (Hons) in Sociology (Day)</td>
								<td>4 years	</td>
								<td>120</td>
								<td>1,70,000.00	</td>
							</tr>
							<tr>
								<td>6</td>
								<td>BSS (Hons) in Sociology (Eve)</td>
								<td>4 years	</td>
								<td>120</td>
								<td>1,50,000.00	</td>
							</tr>
							<tr>
								<td>7</td>
								<td>MSS in Sociology</td>
								<td>1 year</td>
								<td>30</td>
								<td>55,000.00</td>
							</tr>
							<tr>
								<td>8</td>
								<td>MSS in Sociology</td>
								<td>2 years</td>
								<td>60</td>
								<td>65,000.00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-box-new" id="engineering">
					<table class="table courses-cost-common-table">
						<thead>
							<tr>
								<th>Sl. No.</th>
								<th>Name of Courses</th>
								<th>Duration</th>
								<th>Credit</th>
								<th>Total Fees (BDT)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="5">
									<h3 class="department-head">Faculty of Science and Engineering</h3>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>B.Sc in CSE (Day)</td>
								<td>4 years	</td>
								<td>148</td>
								<td>3,50,000.00</td>
							</tr>
							<tr>
								<td>2</td>
								<td>B.Sc in CSE (Eve)</td>
								<td>4 years</td>
								<td>136</td>
								<td>2,70,000.00</td>
							</tr>
							<tr>
								<td>3</td>
								<td>B.Sc in EETE (Day)</td>
								<td>4 years	</td>
								<td>143</td>
								<td>3,90,000.00</td>
							</tr>
							<tr>
								<td>4</td>
								<td>B.Sc in EETE (Eve)</td>
								<td>4 years</td>
								<td>133</td>
								<td>2,50,000.00</td>
							</tr>
							<tr>
								<td>5</td>
								<td>B.Sc in Civil (Day)</td>
								<td>4 years	</td>
								<td>163</td>
								<td>3,20,000.00	</td>
							</tr>
							<tr>
								<td>6</td>
								<td>B.Sc in Civil (Eve)</td>
								<td>3y & 4m</td>
								<td>145</td>
								<td>2,50,000.00	</td>
							</tr>
							<tr>
								<td>7</td>
								<td>M.Sc in CSE (General)</td>
								<td>1.5 year</td>
								<td>36</td>
								<td>90,000.00</td>
							</tr>
							<tr>
								<td>8</td>
								<td>M.Sc in CSE (Thesis)</td>
								<td>1 year</td>
								<td>36</td>
								<td>1,20,000.00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-box-new" id="phamacy">
					<table class="table courses-cost-common-table">
						<thead>
							<tr>
								<th>Sl. No.</th>
								<th>Name of Courses</th>
								<th>Duration</th>
								<th>Credit</th>
								<th>Total Fees (BDT)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="5">
									<h3 class="department-head">Faculty of Phamacy</h3>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>B. Pharm (Hon’s)</td>
								<td>4 years	</td>
								<td>160</td>
								<td>4,50,000.00	</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<hr>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
				<div class="campus-adrees-info">
					<div class="campus-adrees-info-box">
						<h4 class="service-list-name">Application for Admission</h4>
						<p class="permanent-para">A candidate seeking admission to a program must procure prescribed Application From from DIU office on payment of TK. 1000.00. Admission form available at admission information section:</p>
						<p class="admission-address-para">House # 04, Road # 01, Block-F <br/> Banani, Dhaka-1213</p>
						<p class="admission-address-para">Cell Number : 01939851060-4</p>
						<p class="admission-address-para">Cell Number : 01611348344-8</p>
						<p class="admission-address-para">66 Green Road, Pantha Path Dhaka</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<h6 class="admission-common-small-head">ADMISSION INFORMATION</h6>
						<h6 class="admission-common-head"><span class="add-elg-icon"></span>Financial <br/> Assistance</h6>

						<P><storng>On the basis of admission test result, a student will get full free scholarship.</storng></P>

						<p><strong><H4>For Further Information, Please Contact<h4></strong></p>




<h5>Admission Office-1</h5>
<p>66, Green Road, Dhaka-1205</p>
<p>Mobile : 01611348344-8</p>

<h5>Admission Office-2</h5>
<p>House #4, Road #1, Block-F, Banani, DHaka-1213</p>
<p>Mobile : 01939851062-4</p>

<h5>Admission Office-3</h5>
<p>Satarkul, Badda, Dhaka-1212. Mobile : 01939851060-1</p>

<p><strong>Phone :</strong> 55040891-7, Fax: +88-02-55040898</p>
<p><strong>E-mail :</strong> admission@diu.net.bd</p>

					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
