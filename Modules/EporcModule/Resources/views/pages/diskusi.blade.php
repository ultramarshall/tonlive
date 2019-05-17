<section class="container">
	@foreach($diskusi as $d)
	<div class="fs-13 mb-2">
	    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mx-auto comment bg-pale-secondary shadow-sm ">
	        <div class="comment__info border" id="comment_1">
	            <div class="media">
	                <div class="py-2">
	                    <img width="20" height="20" src="https://public-assets.envato-static.com/assets/common/icons-buttons/default-user-2962fd43ee315eafee8bfc08f02fee84687beb0499de44e5ab2873399944b0fe.jpg">
	                </div>
	                <div class="col-11 py-2">
	                    <span class="float-left fw-600">{{ $d->company_name }}</span>
	                    <span class="float-right fw-400 fs-10 lh-12 font-italic">
	                    	<a href="">{{ $d->create_date }}</a>
	                    </span>
	                </div>
	            </div>
	        </div>
	        <div class="comment__body pb-1">
	            <div>
	                <p>{{ $d->comment }}</p>
	            </div>
	        </div>
	    </div>
	</div>
	@endforeach
</div>
