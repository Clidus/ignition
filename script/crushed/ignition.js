function deleteBlogPost(o){$.ajax({type:"POST",url:"/admin/deleteBlogPost",dataType:"json",data:{postID:o},success:function(o){o.error===!0?showErrorModal(o.errorMessage,!1,!1):window.location="/admin/blog/edit"},error:function(){showErrorModal("Well shit. Some kind of error gone done happened. Please try again.")}})}
function postComment(e,a){var o=$("#commentField"+e).val(),s=$("#nameInput"+e).val(),n=$("#emailInput"+e).val();return""==o?void showErrorModal("You need to type something duder!"):void $.ajax({type:"POST",url:"/user/comment",dataType:"json",data:{linkID:e,comment:o,commentTypeID:a,name:s,email:n},success:function(a){if(a.error===!0)showErrorModal(a.errorMessage,a.errorProgressURL,a.errorProgressCTA);else{var o;o='<div class="clearfix eventCommentDisplay">',o+='     <div class="media-left">',o+='         <img src="/uploads/'+a.profileImage+'" class="tinyIconImage imageShadow" />',o+="     </div>",o+='     <div class="media-body eventComment">',o+=a.registeredUser?'         <a href="/user/'+a.userID+'"><b>'+a.username+"</b></a>"+a.comment:"         <b>"+a.username+"</b>"+a.comment,o+='         <span class="datestamp pull-right">Just now</span>',o+="     </div>",o+="</div>",$("#newComment"+e).append(o),$("#commentField"+e).val("")}},error:function(){showErrorModal("Well nuts. It appears that something didnt go to plan. Please call the coast guard imediately.")}})}function showComments(e){$("#hiddenComments"+e).removeClass("hidden"),$("#hiddenCommentLink"+e).addClass("hidden")}
function showErrorModal(r,s,o){$("#errorModalMessage").html(r),s&&($("#errorModalDismiss").attr("href",s),$("#errorModalDismiss").text(o),$("#errorModalDismiss").attr("data-dismiss","false")),$("#errorModal").modal()}
!function(e){e.fn.autogrow=function(){return this.filter("textarea").each(function(){var t=this,n=e(t),i=n.height(),o=n.hasClass("autogrow-short")?0:parseInt(n.css("lineHeight"))||0,a=e("<div></div>").css({position:"absolute",top:-1e4,left:-1e4,width:n.width(),fontSize:n.css("fontSize"),fontFamily:n.css("fontFamily"),fontWeight:n.css("fontWeight"),lineHeight:n.css("lineHeight"),resize:"none","word-wrap":"break-word"}).appendTo(document.body),r=function(e){var r=function(e,t){for(var n=0,i="";t>n;n++)i+=e;return i},s=t.value.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/&/g,"&amp;").replace(/\n$/,"<br/>&nbsp;").replace(/\n/g,"<br/>").replace(/ {2,}/g,function(e){return r("&nbsp;",e.length-1)+" "});e&&e.data&&"keydown"===e.data.event&&13===e.keyCode&&(s+="<br />"),a.css("width",n.width()),a.html(s+(0===o?"...":"")),n.height(Math.max(a.height()+o,i))};n.change(r).keyup(r).keydown({event:"keydown"},r),e(window).resize(r),r()})}}(jQuery);