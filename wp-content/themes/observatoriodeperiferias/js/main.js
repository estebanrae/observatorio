
/*fetch('https://www.googleapis.com/youtube/v3/videos?id=7lCDEYXw3mM&key=AIzaSyDdFqXQRf_6t1aTyhKXsSfHmlMXmNH9wio&part=snippet,contentDetails,statistics,status').then(function(response){
  return response.json();
}).then(function(json){
  console.log(json);
});*/
/*
var nextPage = null;
var playlist = null;
fetch('https://www.googleapis.com/youtube/v3/channels?id=UCfv5YWtQeUryyb4Y9cjLxMg&key=AIzaSyDdFqXQRf_6t1aTyhKXsSfHmlMXmNH9wio&part=snippet,contentDetails')
.then(function(response){
  return response.json();
}).then(function(channel){
  console.log(channel);
  channel.items.forEach(function(v, k){
    var playlistId = v.contentDetails.relatedPlaylists.uploads;
    var nextPageToken = '';
  fetch('https://www.googleapis.com/youtube/v3/playlistItems?playlistId=' + playlistId + '&pageToken=' + nextPageToken + '&key=AIzaSyDdFqXQRf_6t1aTyhKXsSfHmlMXmNH9wio&part=snippet,contentDetails&maxResults=4')
    .then(function(response){
      return response.json();
    }).then(function(playlistItem){
      playlist = playlistId;
      nextPage = playlistItem.nextPageToken;
      playlistItem.items.forEach(function(v1,k1){
        fetch('https://www.googleapis.com/youtube/v3/videos?id=' + v1.contentDetails.videoId + '&key=AIzaSyDdFqXQRf_6t1aTyhKXsSfHmlMXmNH9wio&part=snippet,contentDetails')
        .then(function(response){
          return response.json();
        }).then(function(video){
          video.items.forEach(function(v2,k2){
            $('#vid-' + k1).find('.title').html(v2.snippet.title);
            $('#vid-' + k1).attr('data-vid', v2.id);
            $('#vid-' + k1).find('.thumb').css('background-image', "url(" + v2.snippet.thumbnails.high.url + ")");
          });
        });
      });
    });
  });
});
*/
var total = 0;
var pageNumber = 1;

$(document).ready(function(){
  $("#flecha-der").click(function(){
    var playlist = $('#banner').attr('data-playlist');
    var next = $(this).attr('data-next');
    pageNumber++;
    setNextVids(playlist, next);
  });
  $("#flecha-izq").click(function(){
    pageNumber--;
    var playlist = $('#banner').attr('data-playlist');
    var prev = $(this).attr('data-prev');
    setNextVids(playlist, prev);
  });
  var selectToggle = 0;
  $("body").click(function(e){
    if(selectToggle == 1){
      $("#title-select").hide();
      selectToggle = 0;  
    }
  });
  
  $(".selected-item").click(function(e){
    e.stopPropagation();
    if(selectToggle == 0){
      $("#title-select").show();
      selectToggle = 1;  
    }else{
      $("#title-select").hide();
      selectToggle = 0;  
    }
  });
  $("#title-select li").click(function(e){
    pageNumber = 1;
    var pId = $(this).attr('data-value');
    var title = $(this).html();
    $("#select-placeholder").attr('data-value', pId);
    $("#select-placeholder").html(title);    
    setNextVids($(this).attr('data-value'));
  });
  $("#title-select").change(function(){
    pageNumber = 1;
    setNextVids(this.value);
  });
  $(".menu-item").click(function(e){
    var link = $(this).find('a').attr('href');
    window.location = link;
  });
  $(".menu-item").click(function(e){
    e.stopPropagation();
  });
  $(".thumb").click(function(e){
    //e.stopPropagation();
    var src = 'https://www.youtube.com/embed/' + $(this).closest('.grid-item').attr('data-vid') + '?autoplay=1';
    var title = $(this).closest('.grid-item').attr('data-title');
    var dateArray = $(this).closest('.grid-item').attr('data-date').split('T');
    var dateFormat = dateArray[0];
    var dateData = dateFormat.split('-');
    var months = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre','octubre', 'noviembre', 'diciembre'];
    var date = dateData[2] + ' de ' + months[parseInt(dateData[1]) - 1] + ' del ' + dateData[0];
    var data = $(this).closest('.grid-item').attr('data-desc');
    $("#ficha .title span").html(title);
    $("#ficha .date span").html(date);
    $("#ficha .data span").html(data);
    $("#vid-container iframe").attr("src", src);
    $("#shadowbox-container").show();
  });
  $("#shadowbox-container").mousedown(function(e){
    e.stopPropagation();
    $("#vid-container iframe").attr("src", "");
    $("#shadowbox-container").hide();
  });
  $(".ficha-tecnica").mousedown(function(e){
    e.stopPropagation();
  });
  $("#flecha-izq-mem").click(function(){
    var selected = $("#numbers").find('.selected-page');
    var offset = selected.attr('offset');
    var newlink = selected.prev().attr('href');
    window.location = newlink;
  });

  $("#flecha-der-mem").click(function(){
    var selected = $("#numbers").find('.selected-page');
    var offset = selected.attr('offset');
    var newlink = selected.next().attr('href');
    window.location = newlink;
  });

});

var nextPageToken = '';
function setInitialVids(playlistId){
  fetch('https://www.googleapis.com/youtube/v3/playlistItems?playlistId=' + playlistId + '&pageToken=&key=AIzaSyDdFqXQRf_6t1aTyhKXsSfHmlMXmNH9wio&part=snippet,contentDetails&maxResults=4')
    .then(function(response){
      return response.json();
    }).then(function(playlistItem){
      playlist = playlistId;
      nextPageToken = playlistItem.nextPageToken;
      prevPageToken = playlistItem.prevPageToken;
      total = playlistItem.pageInfo.totalResults;
      if(pageNumber*4/total >= 1){
        $("#flecha-der").hide();
      }
      $('#banner').attr('data-playlist', playlist);
      $('#banner').attr('data-page', 0);
      $("#flecha-der").attr('data-next', playlistItem.nextPageToken);
      $("#flecha-izq").attr('data-prev', playlistItem.prevPageToken);
      playlistItem.items.forEach(function(v1,k1){
        fetch('https://www.googleapis.com/youtube/v3/videos?id=' + v1.contentDetails.videoId + '&key=AIzaSyDdFqXQRf_6t1aTyhKXsSfHmlMXmNH9wio&part=snippet,contentDetails')
        .then(function(response){
          return response.json();
        }).then(function(video){
          video.items.forEach(function(v2,k2){
            $('#vid-' + k1).attr('data-desc', v2.snippet.description);
            $('#vid-' + k1).attr('data-title', v2.snippet.title);
            $('#vid-' + k1).attr('data-date', v2.snippet.publishedAt);
            $('#vid-' + k1).find('.title').html(v2.snippet.title);
            $('#vid-' + k1).attr('data-vid', v2.id);
            $('#vid-' + k1).find('.thumb').css('background-image', "url(" + v2.snippet.thumbnails.standard.url + ")");
          });
        });
      });
    });
}

function setNextVids(playlistId, nextPageToken = ''){
  fetch('https://www.googleapis.com/youtube/v3/playlistItems?playlistId=' + playlistId + '&pageToken=' + nextPageToken + '&key=AIzaSyDdFqXQRf_6t1aTyhKXsSfHmlMXmNH9wio&part=snippet,contentDetails&maxResults=4')
    .then(function(response){
      return response.json();
    }).then(function(playlistItem){
      playlist = playlistId;
      nextPageToken = playlistItem.nextPageToken;
      prevPageToken = playlistItem.prevPageToken;
      total = playlistItem.pageInfo.totalResults;
      $('#banner').attr('data-playlist', playlist);
      $("#flecha-der").attr('data-next', playlistItem.nextPageToken);
      $("#flecha-izq").attr('data-prev', playlistItem.prevPageToken);
      console.log(pageNumber*4/total);
      if(pageNumber*4/total >= 1){
        $("#flecha-der").hide();
      }else{
        $("#flecha-der").show();
      }
      if(pageNumber > 1){
        $("#flecha-izq").show();
      }else{
        $("#flecha-izq").hide();
      }
      playlistItem.items.forEach(function(v1,k1){
        fetch('https://www.googleapis.com/youtube/v3/videos?id=' + v1.contentDetails.videoId + '&key=AIzaSyDdFqXQRf_6t1aTyhKXsSfHmlMXmNH9wio&part=snippet,contentDetails')
        .then(function(response){
          return response.json();
        }).then(function(video){
          video.items.forEach(function(v2,k2){
            $('#vid-' + k1).attr('data-desc', v2.snippet.description);
            $('#vid-' + k1).attr('data-title', v2.snippet.title);
            $('#vid-' + k1).attr('data-date', v2.snippet.publishedAt);
            $('#vid-' + k1).find('.title').html(v2.snippet.title);
            $('#vid-' + k1).attr('data-vid', v2.id);
            $('#vid-' + k1).find('.thumb').css('background-image', "url(" + v2.snippet.thumbnails.standard.url + ")");
          });
        });
      });
    });
}