# ansible-bokeh: role for deploying Bokeh
===

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