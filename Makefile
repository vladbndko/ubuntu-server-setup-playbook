run:
ifdef tags
	ansible-playbook playbook.yml -i inventory.ini --tags $(tags)
else
	ansible-playbook playbook.yml -i inventory.ini
endif