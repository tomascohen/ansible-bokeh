# ansible-bokeh: role for deploying Bokeh
===

This role is provided for deploying Bokeh on your server. It follows the
install instructions step by step.

The default settings can be checked on the vars/defaults.yml file, and set
on the vars/user.yml file.

For using it you need to create an Ansible playbook. An example is provided

Note: it DOESN'T take care of populating the database nor installing MySQL.
If you want that, you need to add your own role to do the task.

## Usage example

To use this role you need to build your own playbook like this:

<pre>---
# This is the top-level playbook for deploying Bokeh at UNC

- hosts: bokeh
  user: tcohen
  sudo: True
  gather_facts: True
  vars_files:
      - vars/defaults.yml
      - vars/user.yml

  roles:
      - bokeh
</pre>

This file is licensed under the terms of GPLv3+
