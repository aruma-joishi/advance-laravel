<form action="/add" method="post">
  <table>
    @csrf
    <tr>
      <th>name</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>age</th>
      <td><input type="text" name="age"></td>
    </tr>
    <tr>
      <th>nationality</th>
      <td><input type="text" name="nationality"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>