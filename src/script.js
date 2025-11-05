document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("calcForm");
  const resultDiv = document.getElementById("result");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const num1 = document.getElementById("num1").value;
    const num2 = document.getElementById("num2").value;
    const operator = document.getElementById("operator").value;

    const formData = new FormData();
    formData.append("num1", num1);
    formData.append("num2", num2);
    formData.append("operator", operator);
    formData.append("calculate", true);

    try {
      const response = await fetch("calculate.php", {
        method: "POST",
        body: formData,
      });
      const result = await response.text();
      resultDiv.innerHTML = result;
    } catch (error) {
      resultDiv.innerHTML = "<p style='color:red'>Error performing calculation.</p>";
      console.error("Error:", error);
    }
  });
});
