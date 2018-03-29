@extends('layouts')
@section('content')
<!-- CONTENT -->
<div id="content">
	<div class="container" id="slider0">
		<div class="slider">
			<div class="slider_area">
				<div class="slides">
					<!-- <div class="slide">
						<div class="aghgh">
							<div class="sqr">
								<img src="psd/fb.png" class="ft">
								<img src="psd/gp.png" class="ft">
								<img src="psd/tt.png" class="ft">
								<img src="psd/else.png" class="ft">
							</div>
							<div class="">
								<img src="psd/1x.png" class="square">
								<img src="psd/2x.png" class="square">
								<img src="psd/3x.png" class="square">
								<img src="psd/4x.png" class="square">
								<img src="psd/5x.png" class="square">
								<img src="psd/6x.png" class="square">
								<img src="psd/7x.png" class="square">
								<img src="psd/8x.png" class="square">
								<img src="psd/9x.png" class="square">
							</div>


							<div class="sqq">
								<img src="psd/fb.png" class="soc">
								<img src="psd/gp.png" class="soc">
								<img src="psd/tt.png" class="soc">
								<img src="psd/else.png" class="soc">
							</div>
						</div>

						<div class="clearfix"></div>
					</div> -->
					<div class="slide">
						<!-- <div class="slidetitle"><img src="qq.png"></div>

						<div class="m-auto">
							<a class="slider_right iqit">
								<img src="yas.png">
							</a>
							<a class="slider_right aqet">
								<img src="nei.png">
							</a>
						</div>
					</div> -->
					<!-- <div class="slide">
						<div class="slidetitle"><img src="qq.png"></div>

						<a class="slider_right iqit">
							<img src="yas.png">
						</a>
						<a class="slider_right aqet">
							<img src="nei.png">
						</a>
					</div> -->
					<div class="slide">
						<div class="" align="center"><!-- <img src="qq.png"> -->{!!$question[0]->question!!}</div>
						<a class="slider_right iqit">
							<img src="yas.png">
						</a>
						<a class="slider_right aqet">
							<img src="nei.png">
						</a>
					</div>
						<!-- <div class="slide">
							<div class="slidetitle"><a class="slider_left">marcxniv</a></div>
						</div> -->

						<!-- <div class="slide">
							<div class="slidetitle">3</div>
						</div> -->
					</div>
				</div>
				<!-- <a class="slider_left">Left</a>
					<a class="slider_right">Right</a> -->
				</div>
			</div>


		</div>
		@endsection