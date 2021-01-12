// JavaScript Document
$(document).ready(function(){
		if (page == 'search'){
			$('#search').addClass('active');
			$('#select').addClass('disabled');
			$('#check').addClass('disabled');
			$('#reserve').addClass('disabled');
			$('#completed').addClass('disabled');
		}else if(page == 'select'){
			$('#search').addClass('complete');
			$('#select').addClass('active');
			$('#check').addClass('disabled');
			$('#reserve').addClass('disabled');
			$('#completed').addClass('disabled');
		}else if(page == 'check_out'){
			$('#search').addClass('complete');
			$('#select').addClass('complete');
			$('#check').addClass('active');
			$('#reserve').addClass('disabled');
			$('#completed').addClass('disabled');
		}else if(page == 'reserve'){
			$('#search').addClass('complete');
			$('#select').addClass('complete');
			$('#check').addClass('complete');
			$('#reserve').addClass('active');
			$('#completed').addClass('disabled');
		}else if(page == 'completed'){
			$('#search').addClass('complete');
			$('#select').addClass('complete');
			$('#check').addClass('complete');
			$('#reserve').addClass('complete');
			$('#completed').addClass('active');
		}
	});