# -*- mode: ruby -*-
# vi: set ft=ruby :
class Hash
  def slice(*keep_keys)
    h = {}
    keep_keys.each { |key| h[key] = fetch(key) if has_key?(key) }
    h
  end unless Hash.method_defined?(:slice)
  def except(*less_keys)
    slice(*keys - less_keys)
  end unless Hash.method_defined?(:except)
end

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # Online Vagrantfile documentation is at https://docs.vagrantup.com.

  # The AWS provider does not actually need to use a Vagrant box file.
  config.vm.box = "dummy"

  config.vm.provider :aws do |aws, override|
    # We will gather the data for these three aws configuration
    # parameters from environment variables (more secure than
    # committing security credentials to your Vagrantfile).
    #
    # aws.access_key_id = "ASIAUYKSVDIVVTNFHDN4"
    # aws.secret_access_key = "GPdgAcFSpVMLm/Liesb+m9DdM7qEJ1Ia8T0dFYK2"
    # aws.session_token = "FwoGZXIvYXdzENb//////////wEaDIOPnouvMY98LX28OSK6AQBMHxG5Ncgfxj8tRXVqOPWZrLXn1Qebxs6zqQsnDuAKgDnOm0Z5DYSTwznI+k+j/gZ8YR9ttsK3Rd9Xr9c3UkcktpwYnIM4nkXgC4ylgpprNWQ7+4I3STsw4nAVnLrm/G6BUWaala61px0FvgBPKUA65V9zrHz7gW+Dtn4TgwqfeS+kLiWWN1Tx3DVgPXJvSuYQ0UQDZzHQH4Ag+iZ0Sqdk3bmjtB0R9MBZ6nbc6YRQIesrMLrERtsa8yir0uKZBjItQvdu3fdR4c82U1TNe/6w5PZS1h+4U2EMR7mShPAHWL22SfRmwusqCDdz9HNR"

    # The region for Amazon Educate is fixed.
    aws.region = "us-east-1"

    # These options force synchronisation of files to the VM's
    # /vagrant directory using rsync, rather than using trying to use
    # SMB (which will not be available by default).
    override.nfs.functional = false
    override.vm.allowed_synced_folder_types = :rsync

    # Following the lab instructions should lead you to provide values
    # appropriate for your environment for the configuration variable
    # assignments preceded by double-hashes in the remainder of this
    # :aws configuration section.

    # The keypair_name parameter tells Amazon which public key to use.
    aws.keypair_name = "cosc349keypair-2022"
    # The private_key_path is a file location in your macOS account
    # (e.g., ~/.ssh/something).
    # For Windows users, just point to the path where you have downloaded the keypair
    # (e.g., C:\\Users\\<username>\\foo.pem). (Use double "\\" for folder path)
    override.ssh.private_key_path = "cosc349keypair-2022.ppk"
    #D:Study/2022/Semester2/cosc349/lab/lab09-vagrant-aws-master/lab09-vagrant-aws-master/
    
    # Choose your Amazon EC2 instance type (t2.micro is cheap).
    aws.instance_type = "t2.micro"

    # You need to indicate the list of security groups your VM should
    # be in. Each security group will be of the form "sg-...", and
    # they should be comma-separated (if you use more than one) within
    # square brackets.
    #
    aws.security_groups = ["sg-0f449fb59f8088eb9"]#, "sg-0a87ed778495aa4eb"]

    # For Vagrant to deploy to EC2 for Amazon Educate accounts, it
    # seems that a specific availability_zone needs to be selected
    # (will be of the form "us-east-1a"). The subnet_id for that
    # availability_zone needs to be included, too (will be of the form
    # "subnet-...").
    aws.availability_zone = "us-east-1a"
    aws.subnet_id = "subnet-0d07d922eae950a7a"
    #aws.subnet_id = "subnet-079cd233700d36af7"

    # You need to chose the AMI (i.e., hard disk image) to use. This
    # will be of the form "ami-...".
    # 
    # If you want to use Ubuntu Linux, you can discover the official
    # Ubuntu AMIs: https://cloud-images.ubuntu.com/locator/ec2/
    #
    # You need to get the region correct, and the correct form of
    # configuration (probably amd64, hvm:ebs-ssd, hvm).
    #
     aws.ami = "ami-0c1704bac156af62c"
    # aws.ami = "ami-026b57f3c383c2eec"

    # If using Ubuntu, you probably also need to uncomment the line
    # below, so that Vagrant connects using username "ubuntu".
    override.ssh.username = "ubuntu"
  end


# My servers will run Ubuntu software as I have been using it in the labs so far.
  #config.vm.box = "ubuntu/xenial64"
# This sets up a VM for hosting my front end web server.
#config.vm.define "fwebserver" do |fwebserver|
  # The name of my web server. 
    #fwebserver.vm.hostname = "fwebserver"
     # fwebserver.vm.provision "shell", path: "build-webserver-vm.sh"
      #End of fwebserver configuration.
  #end


#  config.vm.define "dbserver" do |dbserver|
    # The name of my web server. 
 #     fwebserver.vm.hostname = "dbserver"
  #      fwebserver.vm.provision "shell", path: "build-adminserver-vm.sh"
        #End of fwebserver configuration.
   # end

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
   config.vm.provision "shell", inline: <<-SHELL
     apt-get update
     apt-get install -y apache2
   SHELL
end
