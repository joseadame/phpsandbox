# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
	config.vm.box = "ubuntu/trusty64"
	config.vm.network "forwarded_port", guest: 80, host: 7777
	config.vm.network "private_network", ip: "192.168.33.10"
	config.vm.provision "ansible" do |ansible|
		ansible.playbook = "ansible-provision/playbook.yml"
	end
	config.vm.provider "virtualbox" do |v|
		v.memory = 1024
	end
end
