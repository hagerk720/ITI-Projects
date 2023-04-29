$(function () {
  $(".btn").on("click", (e) => {
    e.preventDefault();
    let content = $("#task-content").val();
    createTask(content);
    console.log(content);
  });
  console.log($(".list-group"));
  $(".list-group").on("click", (e) => {
    if ($(e.target).hasClass("done-icon")) {
      $(e.target)
        .parent()
        .siblings(".task-title")
        .css("text-decoration", "line-through");
    }
    if ($(e.target).hasClass("delete-icon")) {
      $(e.target).parents("li").remove();
    }
  });

  function createTask(content) {
    const html = `
              <li class="list-group-item " style="max-height: fit-content; width:200px" >
              <div class="task-item ">
                <p class= "task-title">${content}</p>
                <div class="icons">
                  <span class="task-icon done-icon">✔️</span>
                  <span class="task-icon delete-icon">❌</span>
            </div>
          </div>
        </li>
          `;
    $(".list-group").append(html);
    $(".delete-icon").on("click", (e) => {
      console.log(e.target);
      console.log("jjjjjjjj");
      $(e.target).parents("li").remove();
    });
  }
});
