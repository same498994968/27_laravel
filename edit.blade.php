<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>PHP+MySQLI的学生信息管理</title>
    </head>
    <body>
        <center>
            @include("stu.menu")
            
            <h3>编辑学生信息</h3>
            <form action="/stu/{{ $vo->id }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="put">
              <table width="300" border="0">
                <tr>
                    <td align="right">姓名：</td>
                    <td><input type="text" name="name" value="{{ $vo->name }}" /></td>
                </tr>
                <tr>
                    <td align="right">性别：</td>
                    <td><input type="radio" name="sex" {{ ($vo->sex == "1")?"checked":"" }} value="1"/>男
                        <input type="radio" name="sex" {{ ($vo->sex == "0")?"checked":"" }} value="0"/>女</td>
                </tr>
                <tr>
                    <td align="right">年龄：</td>
                    <td><input type="text" name="age" value="{{ $vo->age }}"/></td>
                </tr>
                <tr>
                    <td align="right">班级：</td>
                    <td><input type="text" name="classid" value="{{ $vo->classid }}"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加"/>
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
              </table>
            </form>
        </center>
    </body>
</html>