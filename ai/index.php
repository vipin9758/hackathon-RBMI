<!DOCTYPE html>
<html>
<head>
  <title>AI Course Generator</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">

  <h2>AI Course Content Generator</h2>
  <form id="courseForm" class="mb-4">
    <label class="form-label">Enter Course JSON</label>
    <textarea name="course_json" class="form-control" rows="10"  required>
Start the problens
    </textarea>
    <button type="submit" class="btn btn-primary mt-3">Generate</button>
  </form>

  <div id="output"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $("#courseForm").on("submit", function(e){
      e.preventDefault();
      $("#output").html("<div class='alert alert-info'>Generating content...</div>");
      $.post("main_ai.php", $(this).serialize(), function(res){
        try {
          let content = JSON.parse(res);
          $("#output").html("<pre>"+JSON.stringify(content, null, 2)+"</pre>");
        } catch (e) {
          $("#output").html("<div class='alert alert-danger'>Error parsing AI response</div><pre>"+res+"</pre>");
        }
      });
    });
  </script>

</body>
</html>
