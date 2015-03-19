<?php
print("<center>");
print("<br><br><br><br><br>");
print('<div style="font-family:Verdana;font-size:20pt;color:red;font-weight:bold;">Accès interdit</div>');
exit;
?>

// BASE INTEGRATION

integration_server={{ bokeh_db_hostname }}
integration_user={{ bokeh_db_user }}
integration_pwd={{ bokeh_db_pass }}
integration_base={{ bokeh_db_name }}
pwd_master={{ cosmogramme_super_admin_pass }}

// BASE OPAC3
