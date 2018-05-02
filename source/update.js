$(function() {
  $.getJSON("./source/history.json", function(json) {
    console.log(json.data);
    let html = "";
    json.data.forEach(function(value) {
      console.log(value);
      html += `<div class="item">
                <div class="content">
                  <a class="header">${value.title}</a>
                  <div class="extra">
                    ${value.date}
                  </div>
                </div>
              </div>`;
    });
    $('#history').append(html);
  });
})
