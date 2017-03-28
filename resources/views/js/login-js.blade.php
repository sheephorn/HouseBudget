<script>
var getLoginCallback = function(ele) {
    var callback = function(data) {
        if (data.code !== undefined) {
            if (data.code === '0') {
                // 正常時

            } else if (data.code === '1') {
                // error時
            }　else {
                // 想定外コード時
            }
        } else {
            // data = undefined
        }
    }
    return callback;
};

var getRegistCallback = function(ele) {
    var callback = function(data) {
        if (data.code !== undefined) {
            if (data.code === '0') {
                // 正常時

            } else if (data.code === '1') {
                // error時
            }　else {
                // 想定外コード時
            }
        } else {
            // data = undefined
        }
    }
    return callback;
};

var login = function(event, ele)
{
    createLoadingGif($(event.target).next());
    var formObj = {
        'email' : ele.email,
        'password' : ele.sha256
    }
    var callback = getLoginCallback();
    var failcallback = getFailCallback();
    execAjax(ele.url.login, formObj, callback, failcallback);
}

var regist = function(event, ele)
{
    createLoadingGif($(event.target).next());
    var formObj = {
        'email' : ele.email,
        'password' : ele.sha256
    }
    var callback = getRegistCallback();
    var failcallback = getFailCallback();
    execAjax(ele.url.regist, formObj, callback, failcallback);
}




var app = new Vue({
    el : '#login-form',
    data : {
        message : 'Login',
		email : '',
		password : '',
        sessions : '{!! json_encode(session()->all()) !!}',
        url : {
            login : '{{ route($func::GET_LOGIN) }}',
            regist : '{{ route($func::REGIST_NEW_MEMBER) }}'
        }
    },
	created : function() {
         this.sessions = $.parseJSON(this.sessions);
	},
	computed : {
		sha256 : function() {
			return getSha256(this.password);
		}
	},
	methods : {
		login : function(event) {
            login(event, this)
        },
        regist : function(event) {
            regist(event, this)
        }
	}
});

Vue.component('session-all', {

})

</script>
