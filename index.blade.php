<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>PHP+MySQLI的学生信息管理</title>
        <script type="text/javascript">
            function doDel(id){
                if(confirm("确定要删除吗？")){
                    //跳转  这种超链接的方式执行不了 delete提交 
                    //window.location.href="action.php?a=del&id="+id;
                    
                    var form = document.myform;
                    form.action = '/stu/'+id;
                    form.submit();
                }
            }
        </script>
    </head>
    <body>
        <form action="/stu/" method="post" name="myform" style="display:none;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="_method" value="delete"/>
           
        </form>
        <center>
            @include("stu.menu")
            <h3>浏览学生信息</h3>
            <table width="700" border="1">
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>年龄</th>
                    <th>班级</th>
                    <th>操作</th>
                </tr>
                @foreach($list as $stu)
                    <tr>
                        <td>{{ $stu->id }}</td>
                        <td>{{ $stu->name }}</td>
                        <td>{{ ($stu->sex=="1")? "男" : "女" }}</td>
                        <td>{{ $stu->age }}</td>
                        <td>{{ $stu->classid }}</td>
                        <td><a href='javascript:doDel({{ $stu->id }})'>删除</a> 
                            <a href='/stu/{{ $stu->id }}/edit'>编辑</a> </td>
                    </tr>
                @endforeach
            </table>
        </center>
    </body>
</html>