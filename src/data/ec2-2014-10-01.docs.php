<?php return [
  'operations' => [
    'AcceptVpcPeeringConnection' => '<p>Accept a VPC peering connection request. To accept a request, the VPC peering connection must be in the <code>pending-acceptance</code> state, and you must be the owner of the peer VPC. Use the <code>DescribeVpcPeeringConnections</code> request to view your outstanding VPC peering connection requests.</p>',
    'AllocateAddress' => '<p>Acquires an Elastic IP address.</p> <p>An Elastic IP address is for use either in the EC2-Classic platform or in a VPC. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/elastic-ip-addresses-eip.html">Elastic IP Addresses</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'AssignPrivateIpAddresses' => '<p>Assigns one or more secondary private IP addresses to the specified network interface. You can specify one or more specific secondary IP addresses, or you can specify the number of secondary IP addresses to be automatically assigned within the subnet\'s CIDR block range. The number of secondary IP addresses that you can assign to an instance varies by instance type. For information about instance types, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instance-types.html">Instance Types</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>. For more information about Elastic IP addresses, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/elastic-ip-addresses-eip.html">Elastic IP Addresses</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>AssignPrivateIpAddresses is available only in EC2-VPC.</p>',
    'AssociateAddress' => '<p>Associates an Elastic IP address with an instance or a network interface.</p> <p>An Elastic IP address is for use in either the EC2-Classic platform or in a VPC. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/elastic-ip-addresses-eip.html">Elastic IP Addresses</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>[EC2-Classic, VPC in an EC2-VPC-only account] If the Elastic IP address is already associated with a different instance, it is disassociated from that instance and associated with the specified instance.</p> <p>[VPC in an EC2-Classic account] If you don\'t specify a private IP address, the Elastic IP address is associated with the primary IP address. If the Elastic IP address is already associated with a different instance or a network interface, you get an error unless you allow reassociation.</p> <p>This is an idempotent operation. If you perform the operation more than once, Amazon EC2 doesn\'t return an error.</p>',
    'AssociateDhcpOptions' => '<p>Associates a set of DHCP options (that you\'ve previously created] with the specified VPC, or associates no DHCP options with the VPC.</p> <p>After you associate the options with the VPC, any existing instances and all new instances that you launch in that VPC use the options. You don\'t need to restart or relaunch the instances. They automatically pick up the changes within a few hours, depending on how frequently the instance renews its DHCP lease. You can explicitly renew the lease using the operating system on the instance.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_DHCP_Options.html">DHCP Options Sets</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'AssociateRouteTable' => '<p>Associates a subnet with a route table. The subnet and route table must be in the same VPC. This association causes traffic originating from the subnet to be routed according to the routes in the route table. The action returns an association ID, which you need in order to disassociate the route table from the subnet later. A route table can be associated with multiple subnets.</p> <p>For more information about route tables, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Route_Tables.html">Route Tables</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'AttachClassicLinkVpc' => '<p>Links an EC2-Classic instance to a ClassicLink-enabled VPC through one or more of the VPC\'s security groups. You cannot link an EC2-Classic instance to more than one VPC at a time. You can only link an instance that\'s in the <code>running</code> state. An instance is automatically unlinked from a VPC when it\'s stopped - you can link it to the VPC again when you restart it.</p> <p>After you\'ve linked an instance, you cannot change the VPC security groups that are associated with it. To change the security groups, you must first unlink the instance, and then link it again. </p> <p>Linking your instance to a VPC is sometimes referred to as <i>attaching</i> your instance.</p>',
    'AttachInternetGateway' => '<p>Attaches an Internet gateway to a VPC, enabling connectivity between the Internet and the VPC. For more information about your VPC and Internet gateway, see the <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/">Amazon Virtual Private Cloud User Guide</a>.</p>',
    'AttachNetworkInterface' => '<p>Attaches a network interface to an instance.</p>',
    'AttachVolume' => '<p>Attaches an Amazon EBS volume to a running or stopped instance and exposes it to the instance with the specified device name.</p> <p>Encrypted Amazon EBS volumes may only be attached to instances that support Amazon EBS encryption. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSEncryption.html">Amazon EBS Encryption</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>For a list of supported device names, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-attaching-volume.html">Attaching an Amazon EBS Volume to an Instance</a>. Any device names that aren\'t reserved for instance store volumes can be used for Amazon EBS volumes. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/InstanceStorage.html">Amazon EC2 Instance Store</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>If a volume has an AWS Marketplace product code:</p> <ul> <li>The volume can be attached only to a stopped instance.</li> <li>AWS Marketplace product codes are copied from the volume to the instance.</li> <li>You must be subscribed to the product.</li> <li>The instance type and operating system of the instance must support the product. For example, you can\'t detach a volume from a Windows instance and attach it to a Linux instance.</li> </ul> <p>For an overview of the AWS Marketplace, see <a href="https://aws.amazon.com/marketplace/help/200900000">Introducing AWS Marketplace</a>.</p> <p>For more information about Amazon EBS volumes, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-attaching-volume.html">Attaching Amazon EBS Volumes</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'AttachVpnGateway' => '<p>Attaches a virtual private gateway to a VPC. For more information, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_VPN.html">Adding a Hardware Virtual Private Gateway to Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'AuthorizeSecurityGroupEgress' => '<p>Adds one or more egress rules to a security group for use with a VPC. Specifically, this action permits instances to send traffic to one or more destination CIDR IP address ranges, or to one or more destination security groups for the same VPC.</p> <important> <p>You can have up to 50 rules per security group (covering both ingress and egress rules].</p> </important> <p>A security group is for use with instances either in the EC2-Classic platform or in a specific VPC. This action doesn\'t apply to security groups for use in EC2-Classic. For more information, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_SecurityGroups.html">Security Groups for Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p> <p>Each rule consists of the protocol (for example, TCP], plus either a CIDR range or a source group. For the TCP and UDP protocols, you must also specify the destination port or port range. For the ICMP protocol, you must also specify the ICMP type and code. You can use -1 for the type or code to mean all types or all codes.</p> <p>Rule changes are propagated to affected instances as quickly as possible. However, a small delay might occur.</p>',
    'AuthorizeSecurityGroupIngress' => '<p>Adds one or more ingress rules to a security group.</p> <important> <p>EC2-Classic: You can have up to 100 rules per group.</p> <p>EC2-VPC: You can have up to 50 rules per group (covering both ingress and egress rules].</p> </important> <p>Rule changes are propagated to instances within the security group as quickly as possible. However, a small delay might occur.</p> <p>[EC2-Classic] This action gives one or more CIDR IP address ranges permission to access a security group in your account, or gives one or more security groups (called the <i>source groups</i>] permission to access a security group for your account. A source group can be for your own AWS account, or another.</p> <p>[EC2-VPC] This action gives one or more CIDR IP address ranges permission to access a security group in your VPC, or gives one or more other security groups (called the <i>source groups</i>] permission to access a security group for your VPC. The security groups must all be for the same VPC.</p>',
    'BundleInstance' => '<p>Bundles an Amazon instance store-backed Windows instance.</p> <p>During bundling, only the root device volume (C:\\] is bundled. Data on other instance store volumes is not preserved.</p> <note> <p>This action is not applicable for Linux/Unix instances or Windows instances that are backed by Amazon EBS.</p> </note> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/WindowsGuide/Creating_InstanceStoreBacked_WinAMI.html">Creating an Instance Store-Backed Windows AMI</a>.</p>',
    'CancelBundleTask' => '<p>Cancels a bundling operation for an instance store-backed Windows instance.</p>',
    'CancelConversionTask' => '<p>Cancels an active conversion task. The task can be the import of an instance or volume. The action removes all artifacts of the conversion, including a partially uploaded volume or instance. If the conversion is complete or is in the process of transferring the final disk image, the command fails and returns an exception.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/UploadingYourInstancesandVolumes.html">Using the Command Line Tools to Import Your Virtual Machine to Amazon EC2</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CancelExportTask' => '<p>Cancels an active export task. The request removes all artifacts of the export, including any partially-created Amazon S3 objects. If the export task is complete or is in the process of transferring the final disk image, the command fails and returns an error.</p>',
    'CancelReservedInstancesListing' => '<p>Cancels the specified Reserved Instance listing in the Reserved Instance Marketplace.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ri-market-general.html">Reserved Instance Marketplace</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CancelSpotInstanceRequests' => '<p>Cancels one or more Spot Instance requests. Spot Instances are instances that Amazon EC2 starts on your behalf when the bid price that you specify exceeds the current Spot Price. Amazon EC2 periodically sets the Spot Price based on available Spot Instance capacity and current Spot Instance requests. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-requests.html">Spot Instance Requests</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <important> <p>Canceling a Spot Instance request does not terminate running Spot Instances associated with the request.</p> </important>',
    'ConfirmProductInstance' => '<p>Determines whether a product code is associated with an instance. This action can only be used by the owner of the product code. It is useful when a product code owner needs to verify whether another user\'s instance is eligible for support.</p>',
    'CopyImage' => '<p>Initiates the copy of an AMI from the specified source region to the current region. You specify the destination region by using its endpoint when making the request. AMIs that use encrypted Amazon EBS snapshots cannot be copied with this method.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/CopyingAMIs.html">Copying AMIs</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CopySnapshot' => '<p>Copies a point-in-time snapshot of an Amazon EBS volume and stores it in Amazon S3. You can copy the snapshot within the same region or from one region to another. You can use the snapshot to create Amazon EBS volumes or Amazon Machine Images (AMIs]. The snapshot is copied to the regional endpoint that you send the HTTP request to.</p> <p>Copies of encrypted Amazon EBS snapshots remain encrypted. Copies of unencrypted snapshots remain unencrypted.</p> <note> <p>Copying snapshots that were encrypted with non-default AWS Key Management Service (KMS] master keys is not supported at this time. </p> </note> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-copy-snapshot.html">Copying an Amazon EBS Snapshot</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateCustomerGateway' => '<p>Provides information to AWS about your VPN customer gateway device. The customer gateway is the appliance at your end of the VPN connection. (The device on the AWS side of the VPN connection is the virtual private gateway.] You must provide the Internet-routable IP address of the customer gateway\'s external interface. The IP address must be static and can\'t be behind a device performing network address translation (NAT].</p> <p>For devices that use Border Gateway Protocol (BGP], you can also provide the device\'s BGP Autonomous System Number (ASN]. You can use an existing ASN assigned to your network. If you don\'t have an ASN already, you can use a private ASN (in the 64512 - 65534 range].</p> <note> <p>Amazon EC2 supports all 2-byte ASN numbers in the range of 1 - 65534, with the exception of 7224, which is reserved in the <code>us-east-1</code> region, and 9059, which is reserved in the <code>eu-west-1</code> region.</p> </note> <p>For more information about VPN customer gateways, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_VPN.html">Adding a Hardware Virtual Private Gateway to Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateDhcpOptions' => '<p>Creates a set of DHCP options for your VPC. After creating the set, you must associate it with the VPC, causing all existing and new instances that you launch in the VPC to use this set of DHCP options. The following are the individual DHCP options you can specify. For more information about the options, see <a href="http://www.ietf.org/rfc/rfc2132.txt">RFC 2132</a>.</p> <ul> <li> <code>domain-name-servers</code> - The IP addresses of up to four domain name servers, or <code>AmazonProvidedDNS</code>. The default DHCP option set specifies <code>AmazonProvidedDNS</code>. If specifying more than one domain name server, specify the IP addresses in a single parameter, separated by commas.</li> <li> <code>domain-name</code> - If you\'re using AmazonProvidedDNS in <code>us-east-1</code>, specify <code>ec2.internal</code>. If you\'re using AmazonProvidedDNS in another region, specify <code>region.compute.internal</code> (for example, <code>ap-northeast-1.compute.internal</code>]. Otherwise, specify a domain name (for example, <code>MyCompany.com</code>]. <b>Important</b>: Some Linux operating systems accept multiple domain names separated by spaces. However, Windows and other Linux operating systems treat the value as a single domain, which results in unexpected behavior. If your DHCP options set is associated with a VPC that has instances with multiple operating systems, specify only one domain name.</li> <li> <code>ntp-servers</code> - The IP addresses of up to four Network Time Protocol (NTP] servers.</li> <li> <code>netbios-name-servers</code> - The IP addresses of up to four NetBIOS name servers.</li> <li> <code>netbios-node-type</code> - The NetBIOS node type (1, 2, 4, or 8]. We recommend that you specify 2 (broadcast and multicast are not currently supported]. For more information about these node types, see <a href="http://www.ietf.org/rfc/rfc2132.txt">RFC 2132</a>. </li> </ul> <p>Your VPC automatically starts out with a set of DHCP options that includes only a DNS server that we provide (AmazonProvidedDNS]. If you create a set of options, and if your VPC has an Internet gateway, make sure to set the <code>domain-name-servers</code> option either to <code>AmazonProvidedDNS</code> or to a domain name server of your choice. For more information about DHCP options, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_DHCP_Options.html">DHCP Options Sets</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateImage' => '<p>Creates an Amazon EBS-backed AMI from an Amazon EBS-backed instance that is either running or stopped.</p> <p>If you customized your instance with instance store volumes or EBS volumes in addition to the root device volume, the new AMI contains block device mapping information for those volumes. When you launch an instance from this new AMI, the instance automatically launches with those additional volumes.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/creating-an-ami-ebs.html">Creating Amazon EBS-Backed Linux AMIs</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateInstanceExportTask' => '<p>Exports a running or stopped instance to an Amazon S3 bucket.</p> <p>For information about the supported operating systems, image formats, and known limitations for the types of instances you can export, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ExportingEC2Instances.html">Exporting EC2 Instances</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateInternetGateway' => '<p>Creates an Internet gateway for use with a VPC. After creating the Internet gateway, you attach it to a VPC using <a>AttachInternetGateway</a>.</p> <p>For more information about your VPC and Internet gateway, see the <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/">Amazon Virtual Private Cloud User Guide</a>.</p>',
    'CreateKeyPair' => '<p>Creates a 2048-bit RSA key pair with the specified name. Amazon EC2 stores the public key and displays the private key for you to save to a file. The private key is returned as an unencrypted PEM encoded PKCS#8 private key. If a key with the specified name already exists, Amazon EC2 returns an error.</p> <p>You can have up to five thousand key pairs per region.</p> <p>The key pair returned to you is available only in the region in which you create it. To create a key pair that is available in all regions, use <a>ImportKeyPair</a>.</p> <p>For more information about key pairs, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html">Key Pairs</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateNetworkAcl' => '<p>Creates a network ACL in a VPC. Network ACLs provide an optional layer of security (in addition to security groups] for the instances in your VPC.</p> <p>For more information about network ACLs, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_ACLs.html">Network ACLs</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateNetworkAclEntry' => '<p>Creates an entry (a rule] in a network ACL with the specified rule number. Each network ACL has a set of numbered ingress rules and a separate set of numbered egress rules. When determining whether a packet should be allowed in or out of a subnet associated with the ACL, we process the entries in the ACL according to the rule numbers, in ascending order. Each network ACL has a set of ingress rules and a separate set of egress rules.</p> <p>We recommend that you leave room between the rule numbers (for example, 100, 110, 120, ...], and not number them one right after the other (for example, 101, 102, 103, ...]. This makes it easier to add a rule between existing ones without having to renumber the rules.</p> <p>After you add an entry, you can\'t modify it; you must either replace it, or create an entry and delete the old one.</p> <p>For more information about network ACLs, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_ACLs.html">Network ACLs</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateNetworkInterface' => '<p>Creates a network interface in the specified subnet.</p> <p>For more information about network interfaces, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-eni.html">Elastic Network Interfaces</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreatePlacementGroup' => '<p>Creates a placement group that you launch cluster instances into. You must give the group a name that\'s unique within the scope of your account.</p> <p>For more information about placement groups and cluster instances, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using_cluster_computing.html">Cluster Instances</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateReservedInstancesListing' => '<p>Creates a listing for Amazon EC2 Reserved Instances to be sold in the Reserved Instance Marketplace. You can submit one Reserved Instance listing at a time. To get a list of your Reserved Instances, you can use the <a>DescribeReservedInstances</a> operation.</p> <p>The Reserved Instance Marketplace matches sellers who want to resell Reserved Instance capacity that they no longer need with buyers who want to purchase additional capacity. Reserved Instances bought and sold through the Reserved Instance Marketplace work like any other Reserved Instances. </p> <p>To sell your Reserved Instances, you must first register as a Seller in the Reserved Instance Marketplace. After completing the registration process, you can create a Reserved Instance Marketplace listing of some or all of your Reserved Instances, and specify the upfront price to receive for them. Your Reserved Instance listings then become available for purchase. To view the details of your Reserved Instance listing, you can use the <a>DescribeReservedInstancesListings</a> operation.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ri-market-general.html">Reserved Instance Marketplace</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateRoute' => '<p>Creates a route in a route table within a VPC.</p> <p>You must specify one of the following targets: Internet gateway or virtual private gateway, NAT instance, VPC peering connection, or network interface.</p> <p>When determining how to route traffic, we use the route with the most specific match. For example, let\'s say the traffic is destined for <code>192.0.2.3</code>, and the route table includes the following two routes:</p> <ul> <li> <p><code>192.0.2.0/24</code> (goes to some target A]</p> </li> <li> <p><code>192.0.2.0/28</code> (goes to some target B]</p> </li> </ul> <p>Both routes apply to the traffic destined for <code>192.0.2.3</code>. However, the second route in the list covers a smaller number of IP addresses and is therefore more specific, so we use that route to determine where to target the traffic.</p> <p>For more information about route tables, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Route_Tables.html">Route Tables</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateRouteTable' => '<p>Creates a route table for the specified VPC. After you create a route table, you can add routes and associate the table with a subnet.</p> <p>For more information about route tables, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Route_Tables.html">Route Tables</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateSecurityGroup' => '<p>Creates a security group.</p> <p>A security group is for use with instances either in the EC2-Classic platform or in a specific VPC. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-network-security.html">Amazon EC2 Security Groups</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i> and <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_SecurityGroups.html">Security Groups for Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p> <important> <p>EC2-Classic: You can have up to 500 security groups.</p> <p>EC2-VPC: You can create up to 100 security groups per VPC.</p> </important> <p>When you create a security group, you specify a friendly name of your choice. You can have a security group for use in EC2-Classic with the same name as a security group for use in a VPC. However, you can\'t have two security groups for use in EC2-Classic with the same name or two security groups for use in a VPC with the same name.</p> <p>You have a default security group for use in EC2-Classic and a default security group for use in your VPC. If you don\'t specify a security group when you launch an instance, the instance is launched into the appropriate default security group. A default security group includes a default rule that grants instances unrestricted network access to each other.</p> <p>You can add or remove rules from your security groups using <a>AuthorizeSecurityGroupIngress</a>, <a>AuthorizeSecurityGroupEgress</a>, <a>RevokeSecurityGroupIngress</a>, and <a>RevokeSecurityGroupEgress</a>.</p>',
    'CreateSnapshot' => '<p>Creates a snapshot of an Amazon EBS volume and stores it in Amazon S3. You can use snapshots for backups, to make copies of Amazon EBS volumes, and to save data before shutting down an instance.</p> <p>When a snapshot is created, any AWS Marketplace product codes that are associated with the source volume are propagated to the snapshot.</p> <p>You can take a snapshot of an attached volume that is in use. However, snapshots only capture data that has been written to your Amazon EBS volume at the time the snapshot command is issued; this may exclude any data that has been cached by any applications or the operating system. If you can pause any file systems on the volume long enough to take a snapshot, your snapshot should be complete. However, if you cannot pause all file writes to the volume, you should unmount the volume from within the instance, issue the snapshot command, and then remount the volume to ensure a consistent and complete snapshot. You may remount and use your volume while the snapshot status is <code>pending</code>.</p> <p>To create a snapshot for Amazon EBS volumes that serve as root devices, you should stop the instance before taking the snapshot.</p> <p>Snapshots that are taken from encrypted volumes are automatically encrypted. Volumes that are created from encrypted snapshots are also automatically encrypted. Your encrypted volumes and any associated snapshots always remain protected.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/AmazonEBS.html">Amazon Elastic Block Store</a> and <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSEncryption.html">Amazon EBS Encryption</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateSpotDatafeedSubscription' => '<p>Creates a data feed for Spot Instances, enabling you to view Spot Instance usage logs. You can create one data feed per AWS account. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-data-feeds.html">Spot Instance Data Feed</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateSubnet' => '<p>Creates a subnet in an existing VPC.</p> <p>When you create each subnet, you provide the VPC ID and the CIDR block you want for the subnet. After you create a subnet, you can\'t change its CIDR block. The subnet\'s CIDR block can be the same as the VPC\'s CIDR block (assuming you want only a single subnet in the VPC], or a subset of the VPC\'s CIDR block. If you create more than one subnet in a VPC, the subnets\' CIDR blocks must not overlap. The smallest subnet (and VPC] you can create uses a /28 netmask (16 IP addresses], and the largest uses a /16 netmask (65,536 IP addresses].</p> <important> <p>AWS reserves both the first four and the last IP address in each subnet\'s CIDR block. They\'re not available for use.</p> </important> <p>If you add more than one subnet to a VPC, they\'re set up in a star topology with a logical router in the middle.</p> <p>If you launch an instance in a VPC using an Amazon EBS-backed AMI, the IP address doesn\'t change if you stop and restart the instance (unlike a similar instance launched outside a VPC, which gets a new IP address when restarted]. It\'s therefore possible to have a subnet with no running instances (they\'re all stopped], but no remaining IP addresses available.</p> <p>For more information about subnets, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Subnets.html">Your VPC and Subnets</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateTags' => '<p>Adds or overwrites one or more tags for the specified Amazon EC2 resource or resources. Each resource can have a maximum of 10 tags. Each tag consists of a key and optional value. Tag keys must be unique per resource.</p> <p>For more information about tags, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Using_Tags.html">Tagging Your Resources</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateVolume' => '<p>Creates an Amazon EBS volume that can be attached to an instance in the same Availability Zone. The volume is created in the regional endpoint that you send the HTTP request to. For more information see <a href="http://docs.aws.amazon.com/general/latest/gr/rande.html">Regions and Endpoints</a>.</p> <p>You can create a new empty volume or restore a volume from an Amazon EBS snapshot. Any AWS Marketplace product codes from the snapshot are propagated to the volume.</p> <p>You can create encrypted volumes with the <code>Encrypted</code> parameter. Encrypted volumes may only be attached to instances that support Amazon EBS encryption. Volumes that are created from encrypted snapshots are also automatically encrypted. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSEncryption.html">Amazon EBS Encryption</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-creating-volume.html">Creating or Restoring an Amazon EBS Volume</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'CreateVpc' => '<p>Creates a VPC with the specified CIDR block.</p> <p>The smallest VPC you can create uses a /28 netmask (16 IP addresses], and the largest uses a /16 netmask (65,536 IP addresses]. To help you decide how big to make your VPC, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Subnets.html">Your VPC and Subnets</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p> <p>By default, each instance you launch in the VPC has the default DHCP options, which includes only a default DNS server that we provide (AmazonProvidedDNS]. For more information about DHCP options, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_DHCP_Options.html">DHCP Options Sets</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateVpcPeeringConnection' => '<p>Requests a VPC peering connection between two VPCs: a requester VPC that you own and a peer VPC with which to create the connection. The peer VPC can belong to another AWS account. The requester VPC and peer VPC cannot have overlapping CIDR blocks.</p> <p>The owner of the peer VPC must accept the peering request to activate the peering connection. The VPC peering connection request expires after 7 days, after which it cannot be accepted or rejected.</p> <p>A <code>CreateVpcPeeringConnection</code> request between VPCs with overlapping CIDR blocks results in the VPC peering connection having a status of <code>failed</code>.</p>',
    'CreateVpnConnection' => '<p>Creates a VPN connection between an existing virtual private gateway and a VPN customer gateway. The only supported connection type is <code>ipsec.1</code>.</p> <p>The response includes information that you need to give to your network administrator to configure your customer gateway.</p> <important> <p>We strongly recommend that you use HTTPS when calling this operation because the response contains sensitive cryptographic information for configuring your customer gateway.</p> </important> <p>If you decide to shut down your VPN connection for any reason and later create a new VPN connection, you must reconfigure your customer gateway with the new information returned from this call.</p> <p>For more information about VPN connections, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_VPN.html">Adding a Hardware Virtual Private Gateway to Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateVpnConnectionRoute' => '<p>Creates a static route associated with a VPN connection between an existing virtual private gateway and a VPN customer gateway. The static route allows traffic to be routed from the virtual private gateway to the VPN customer gateway.</p> <p>For more information about VPN connections, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_VPN.html">Adding a Hardware Virtual Private Gateway to Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'CreateVpnGateway' => '<p>Creates a virtual private gateway. A virtual private gateway is the endpoint on the VPC side of your VPN connection. You can create a virtual private gateway before creating the VPC itself.</p> <p>For more information about virtual private gateways, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_VPN.html">Adding a Hardware Virtual Private Gateway to Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'DeleteCustomerGateway' => '<p>Deletes the specified customer gateway. You must delete the VPN connection before you can delete the customer gateway.</p>',
    'DeleteDhcpOptions' => '<p>Deletes the specified set of DHCP options. You must disassociate the set of DHCP options before you can delete it. You can disassociate the set of DHCP options by associating either a new set of options or the default set of options with the VPC.</p>',
    'DeleteInternetGateway' => '<p>Deletes the specified Internet gateway. You must detach the Internet gateway from the VPC before you can delete it.</p>',
    'DeleteKeyPair' => '<p>Deletes the specified key pair, by removing the public key from Amazon EC2.</p>',
    'DeleteNetworkAcl' => '<p>Deletes the specified network ACL. You can\'t delete the ACL if it\'s associated with any subnets. You can\'t delete the default network ACL.</p>',
    'DeleteNetworkAclEntry' => '<p>Deletes the specified ingress or egress entry (rule] from the specified network ACL.</p>',
    'DeleteNetworkInterface' => '<p>Deletes the specified network interface. You must detach the network interface before you can delete it.</p>',
    'DeletePlacementGroup' => '<p>Deletes the specified placement group. You must terminate all instances in the placement group before you can delete the placement group. For more information about placement groups and cluster instances, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using_cluster_computing.html">Cluster Instances</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DeleteRoute' => '<p>Deletes the specified route from the specified route table.</p>',
    'DeleteRouteTable' => '<p>Deletes the specified route table. You must disassociate the route table from any subnets before you can delete it. You can\'t delete the main route table.</p>',
    'DeleteSecurityGroup' => '<p>Deletes a security group.</p> <p>If you attempt to delete a security group that is associated with an instance, or is referenced by another security group, the operation fails with <code>InvalidGroup.InUse</code> in EC2-Classic or <code>DependencyViolation</code> in EC2-VPC.</p>',
    'DeleteSnapshot' => '<p>Deletes the specified snapshot.</p> <p>When you make periodic snapshots of a volume, the snapshots are incremental, and only the blocks on the device that have changed since your last snapshot are saved in the new snapshot. When you delete a snapshot, only the data not needed for any other snapshot is removed. So regardless of which prior snapshots have been deleted, all active snapshots will have access to all the information needed to restore the volume.</p> <p>You cannot delete a snapshot of the root device of an Amazon EBS volume used by a registered AMI. You must first de-register the AMI before you can delete the snapshot.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-deleting-snapshot.html">Deleting an Amazon EBS Snapshot</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DeleteSpotDatafeedSubscription' => '<p>Deletes the data feed for Spot Instances. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-data-feeds.html">Spot Instance Data Feed</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DeleteSubnet' => '<p>Deletes the specified subnet. You must terminate all running instances in the subnet before you can delete the subnet.</p>',
    'DeleteTags' => '<p>Deletes the specified set of tags from the specified set of resources. This call is designed to follow a <code>DescribeTags</code> request.</p> <p>For more information about tags, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Using_Tags.html">Tagging Your Resources</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DeleteVolume' => '<p>Deletes the specified Amazon EBS volume. The volume must be in the <code>available</code> state (not attached to an instance].</p> <note> <p>The volume may remain in the <code>deleting</code> state for several minutes.</p> </note> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-deleting-volume.html">Deleting an Amazon EBS Volume</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DeleteVpc' => '<p>Deletes the specified VPC. You must detach or delete all gateways and resources that are associated with the VPC before you can delete it. For example, you must terminate all instances running in the VPC, delete all security groups associated with the VPC (except the default one], delete all route tables associated with the VPC (except the default one], and so on.</p>',
    'DeleteVpcPeeringConnection' => '<p>Deletes a VPC peering connection. Either the owner of the requester VPC or the owner of the peer VPC can delete the VPC peering connection if it\'s in the <code>active</code> state. The owner of the requester VPC can delete a VPC peering connection in the <code>pending-acceptance</code> state. </p>',
    'DeleteVpnConnection' => '<p>Deletes the specified VPN connection.</p> <p>If you\'re deleting the VPC and its associated components, we recommend that you detach the virtual private gateway from the VPC and delete the VPC before deleting the VPN connection. If you believe that the tunnel credentials for your VPN connection have been compromised, you can delete the VPN connection and create a new one that has new keys, without needing to delete the VPC or virtual private gateway. If you create a new VPN connection, you must reconfigure the customer gateway using the new configuration information returned with the new VPN connection ID.</p>',
    'DeleteVpnConnectionRoute' => '<p>Deletes the specified static route associated with a VPN connection between an existing virtual private gateway and a VPN customer gateway. The static route allows traffic to be routed from the virtual private gateway to the VPN customer gateway.</p>',
    'DeleteVpnGateway' => '<p>Deletes the specified virtual private gateway. We recommend that before you delete a virtual private gateway, you detach it from the VPC and delete the VPN connection. Note that you don\'t need to delete the virtual private gateway if you plan to delete and recreate the VPN connection between your VPC and your network.</p>',
    'DeregisterImage' => '<p>Deregisters the specified AMI. After you deregister an AMI, it can\'t be used to launch new instances.</p> <p>This command does not delete the AMI.</p>',
    'DescribeAccountAttributes' => '<p>Describes attributes of your AWS account. The following are the supported account attributes:</p> <ul> <li> <p><code>supported-platforms</code>: Indicates whether your account can launch instances into EC2-Classic and EC2-VPC, or only into EC2-VPC.</p> </li> <li> <p><code>default-vpc</code>: The ID of the default VPC for your account, or <code>none</code>.</p> </li> <li> <p><code>max-instances</code>: The maximum number of On-Demand instances that you can run.</p> </li> <li> <p><code>vpc-max-security-groups-per-interface</code>: The maximum number of security groups that you can assign to a network interface.</p> </li> <li> <p><code>max-elastic-ips</code>: The maximum number of Elastic IP addresses that you can allocate for use with EC2-Classic. </p> </li> <li> <p><code>vpc-max-elastic-ips</code>: The maximum number of Elastic IP addresses that you can allocate for use with EC2-VPC.</p> </li> </ul>',
    'DescribeAddresses' => '<p>Describes one or more of your Elastic IP addresses.</p> <p>An Elastic IP address is for use in either the EC2-Classic platform or in a VPC. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/elastic-ip-addresses-eip.html">Elastic IP Addresses</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeAvailabilityZones' => '<p>Describes one or more of the Availability Zones that are available to you. The results include zones only for the region you\'re currently using. If there is an event impacting an Availability Zone, you can use this request to view the state and any provided message for that Availability Zone.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html">Regions and Availability Zones</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeBundleTasks' => '<p>Describes one or more of your bundling tasks.</p> <note><p>Completed bundle tasks are listed for only a limited time. If your bundle task is no longer in the list, you can still register an AMI from it. Just use <code>RegisterImage</code> with the Amazon S3 bucket name and image manifest name you provided to the bundle task.</p></note>',
    'DescribeClassicLinkInstances' => '<p>Describes one or more of your linked EC2-Classic instances. This request only returns information about EC2-Classic instances linked to a VPC through ClassicLink; you cannot use this request to return information about other instances.</p>',
    'DescribeConversionTasks' => '<p>Describes one or more of your conversion tasks. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/UploadingYourInstancesandVolumes.html">Using the Command Line Tools to Import Your Virtual Machine to Amazon EC2</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeCustomerGateways' => '<p>Describes one or more of your VPN customer gateways.</p> <p>For more information about VPN customer gateways, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_VPN.html">Adding a Hardware Virtual Private Gateway to Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'DescribeDhcpOptions' => '<p>Describes one or more of your DHCP options sets.</p> <p>For more information about DHCP options sets, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_DHCP_Options.html">DHCP Options Sets</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'DescribeExportTasks' => '<p>Describes one or more of your export tasks.</p>',
    'DescribeImageAttribute' => '<p>Describes the specified attribute of the specified AMI. You can specify only one attribute at a time.</p>',
    'DescribeImages' => '<p>Describes one or more of the images (AMIs, AKIs, and ARIs] available to you. Images available to you include public images, private images that you own, and private images owned by other AWS accounts but for which you have explicit launch permissions.</p> <note><p>Deregistered images are included in the returned results for an unspecified interval after deregistration.</p></note>',
    'DescribeInstanceAttribute' => '<p>Describes the specified attribute of the specified instance. You can specify only one attribute at a time. Valid attribute values are: <code>instanceType</code> | <code>kernel</code> | <code>ramdisk</code> | <code>userData</code> | <code>disableApiTermination</code> | <code>instanceInitiatedShutdownBehavior</code> | <code>rootDeviceName</code> | <code>blockDeviceMapping</code> | <code>productCodes</code> | <code>sourceDestCheck</code> | <code>groupSet</code> | <code>ebsOptimized</code> | <code>sriovNetSupport</code></p>',
    'DescribeInstanceStatus' => '<p>Describes the status of one or more instances, including any scheduled events.</p> <p>Instance status has two main components:</p> <ul> <li> <p>System Status reports impaired functionality that stems from issues related to the systems that support an instance, such as such as hardware failures and network connectivity problems. This call reports such problems as impaired reachability.</p> </li> <li> <p>Instance Status reports impaired functionality that arises from problems internal to the instance. This call reports such problems as impaired reachability.</p> </li> </ul> <p>Instance status provides information about four types of scheduled events for an instance that may require your attention:</p> <ul> <li> <p>Scheduled Reboot: When Amazon EC2 determines that an instance must be rebooted, the instances status returns one of two event codes: <code>system-reboot</code> or <code>instance-reboot</code>. System reboot commonly occurs if certain maintenance or upgrade operations require a reboot of the underlying host that supports an instance. Instance reboot commonly occurs if the instance must be rebooted, rather than the underlying host. Rebooting events include a scheduled start and end time.</p> </li> <li> <p>System Maintenance: When Amazon EC2 determines that an instance requires maintenance that requires power or network impact, the instance status is the event code <code>system-maintenance</code>. System maintenance is either power maintenance or network maintenance. For power maintenance, your instance will be unavailable for a brief period of time and then rebooted. For network maintenance, your instance will experience a brief loss of network connectivity. System maintenance events include a scheduled start and end time. You will also be notified by email if one of your instances is set for system maintenance. The email message indicates when your instance is scheduled for maintenance.</p> </li> <li> <p>Scheduled Retirement: When Amazon EC2 determines that an instance must be shut down, the instance status is the event code <code>instance-retirement</code>. Retirement commonly occurs when the underlying host is degraded and must be replaced. Retirement events include a scheduled start and end time. You will also be notified by email if one of your instances is set to retiring. The email message indicates when your instance will be permanently retired.</p> </li> <li> <p>Scheduled Stop: When Amazon EC2 determines that an instance must be shut down, the instances status returns an event code called <code>instance-stop</code>. Stop events include a scheduled start and end time. You will also be notified by email if one of your instances is set to stop. The email message indicates when your instance will be stopped.</p> </li> </ul> <p>When your instance is retired, it will either be terminated (if its root device type is the instance-store] or stopped (if its root device type is an EBS volume]. Instances stopped due to retirement will not be restarted, but you can do so manually. You can also avoid retirement of EBS-backed instances by manually restarting your instance when its event code is <code>instance-retirement</code>. This ensures that your instance is started on a different underlying host.</p> <p>For more information about failed status checks, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/TroubleshootingInstances.html">Troubleshooting Instances with Failed Status Checks</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>. For more information about working with scheduled events, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/monitoring-instances-status-check_sched.html#schedevents_actions">Working with an Instance That Has a Scheduled Event</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeInstances' => '<p>Describes one or more of your instances.</p> <p>If you specify one or more instance IDs, Amazon EC2 returns information for those instances. If you do not specify instance IDs, Amazon EC2 returns information for all relevant instances. If you specify an instance ID that is not valid, an error is returned. If you specify an instance that you do not own, it is not included in the returned results.</p> <p>Recently terminated instances might appear in the returned results. This interval is usually less than one hour.</p>',
    'DescribeInternetGateways' => '<p>Describes one or more of your Internet gateways.</p>',
    'DescribeKeyPairs' => '<p>Describes one or more of your key pairs.</p> <p>For more information about key pairs, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html">Key Pairs</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeNetworkAcls' => '<p>Describes one or more of your network ACLs.</p> <p>For more information about network ACLs, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_ACLs.html">Network ACLs</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'DescribeNetworkInterfaceAttribute' => '<p>Describes a network interface attribute. You can specify only one attribute at a time.</p>',
    'DescribeNetworkInterfaces' => '<p>Describes one or more of your network interfaces.</p>',
    'DescribePlacementGroups' => '<p>Describes one or more of your placement groups. For more information about placement groups and cluster instances, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using_cluster_computing.html">Cluster Instances</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeRegions' => '<p>Describes one or more regions that are currently available to you.</p> <p>For a list of the regions supported by Amazon EC2, see <a href="http://docs.aws.amazon.com/general/latest/gr/rande.html#ec2_region">Regions and Endpoints</a>.</p>',
    'DescribeReservedInstances' => '<p>Describes one or more of the Reserved Instances that you purchased.</p> <p>For more information about Reserved Instances, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/concepts-on-demand-reserved-instances.html">Reserved Instances</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeReservedInstancesListings' => '<p>Describes your account\'s Reserved Instance listings in the Reserved Instance Marketplace.</p> <p>The Reserved Instance Marketplace matches sellers who want to resell Reserved Instance capacity that they no longer need with buyers who want to purchase additional capacity. Reserved Instances bought and sold through the Reserved Instance Marketplace work like any other Reserved Instances. </p> <p>As a seller, you choose to list some or all of your Reserved Instances, and you specify the upfront price to receive for them. Your Reserved Instances are then listed in the Reserved Instance Marketplace and are available for purchase. </p> <p>As a buyer, you specify the configuration of the Reserved Instance to purchase, and the Marketplace matches what you\'re searching for with what\'s available. The Marketplace first sells the lowest priced Reserved Instances to you, and continues to sell available Reserved Instance listings to you until your demand is met. You are charged based on the total price of all of the listings that you purchase.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ri-market-general.html">Reserved Instance Marketplace</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeReservedInstancesModifications' => '<p>Describes the modifications made to your Reserved Instances. If no parameter is specified, information about all your Reserved Instances modification requests is returned. If a modification ID is specified, only information about the specific modification is returned.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ri-modifying.html">Modifying Reserved Instances</a> in the Amazon Elastic Compute Cloud User Guide for Linux.</p>',
    'DescribeReservedInstancesOfferings' => '<p>Describes Reserved Instance offerings that are available for purchase. With Reserved Instances, you purchase the right to launch instances for a period of time. During that time period, you do not receive insufficient capacity errors, and you pay a lower usage rate than the rate charged for On-Demand instances for the actual time used.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ri-market-general.html">Reserved Instance Marketplace</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeRouteTables' => '<p>Describes one or more of your route tables.</p> <p>For more information about route tables, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Route_Tables.html">Route Tables</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'DescribeSecurityGroups' => '<p>Describes one or more of your security groups.</p> <p>A security group is for use with instances either in the EC2-Classic platform or in a specific VPC. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-network-security.html">Amazon EC2 Security Groups</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i> and <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_SecurityGroups.html">Security Groups for Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'DescribeSnapshotAttribute' => '<p>Describes the specified attribute of the specified snapshot. You can specify only one attribute at a time.</p> <p>For more information about Amazon EBS snapshots, see <a href=\'http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSSnapshots.html\'>Amazon EBS Snapshots</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeSnapshots' => '<p>Describes one or more of the Amazon EBS snapshots available to you. Available snapshots include public snapshots available for any AWS account to launch, private snapshots that you own, and private snapshots owned by another AWS account but for which you\'ve been given explicit create volume permissions.</p> <p>The create volume permissions fall into the following categories:</p> <ul> <li> <i>public</i>: The owner of the snapshot granted create volume permissions for the snapshot to the <code>all</code> group. All AWS accounts have create volume permissions for these snapshots.</li> <li> <i>explicit</i>: The owner of the snapshot granted create volume permissions to a specific AWS account.</li> <li> <i>implicit</i>: An AWS account has implicit create volume permissions for all snapshots it owns.</li> </ul> <p>The list of snapshots returned can be modified by specifying snapshot IDs, snapshot owners, or AWS accounts with create volume permissions. If no options are specified, Amazon EC2 returns all snapshots for which you have create volume permissions.</p> <p>If you specify one or more snapshot IDs, only snapshots that have the specified IDs are returned. If you specify an invalid snapshot ID, an error is returned. If you specify a snapshot ID for which you do not have access, it is not included in the returned results.</p> <p>If you specify one or more snapshot owners, only snapshots from the specified owners and for which you have access are returned. The results can include the AWS account IDs of the specified owners, <code>amazon</code> for snapshots owned by Amazon, or <code>self</code> for snapshots that you own.</p> <p>If you specify a list of restorable users, only snapshots with create snapshot permissions for those users are returned. You can specify AWS account IDs (if you own the snapshots], <code>self</code> for snapshots for which you own or have explicit permissions, or <code>all</code> for public snapshots.</p> <p>For more information about Amazon EBS snapshots, see <a href=\'http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSSnapshots.html\'>Amazon EBS Snapshots</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeSpotDatafeedSubscription' => '<p>Describes the data feed for Spot Instances. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-data-feeds.html">Spot Instance Data Feed</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeSpotInstanceRequests' => '<p>Describes the Spot Instance requests that belong to your account. Spot Instances are instances that Amazon EC2 launches when the bid price that you specify exceeds the current Spot Price. Amazon EC2 periodically sets the Spot Price based on available Spot Instance capacity and current Spot Instance requests. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-requests.html">Spot Instance Requests</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>You can use <code>DescribeSpotInstanceRequests</code> to find a running Spot Instance by examining the response. If the status of the Spot Instance is <code>fulfilled</code>, the instance ID appears in the response and contains the identifier of the instance. Alternatively, you can use <a>DescribeInstances</a> with a filter to look for instances where the instance lifecycle is <code>spot</code>.</p>',
    'DescribeSpotPriceHistory' => '<p>Describes the Spot Price history. The prices returned are listed in chronological order, from the oldest to the most recent, for up to the past 90 days. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-spot-instances-history.html">Spot Instance Pricing History</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>When you specify a start and end time, this operation returns the prices of the instance types within the time range that you specified and the time when the price changed. The price is valid within the time period that you specified; the response merely indicates the last time that the price changed.</p>',
    'DescribeSubnets' => '<p>Describes one or more of your subnets.</p> <p>For more information about subnets, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Subnets.html">Your VPC and Subnets</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'DescribeTags' => '<p>Describes one or more of the tags for your EC2 resources.</p> <p>For more information about tags, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Using_Tags.html">Tagging Your Resources</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeVolumeAttribute' => '<p>Describes the specified attribute of the specified volume. You can specify only one attribute at a time.</p> <p>For more information about Amazon EBS volumes, see <a href=\'http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSVolumes.html\'>Amazon EBS Volumes</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeVolumeStatus' => '<p>Describes the status of the specified volumes. Volume status provides the result of the checks performed on your volumes to determine events that can impair the performance of your volumes. The performance of a volume can be affected if an issue occurs on the volume\'s underlying host. If the volume\'s underlying host experiences a power outage or system issue, after the system is restored, there could be data inconsistencies on the volume. Volume events notify you if this occurs. Volume actions notify you if any action needs to be taken in response to the event.</p> <p>The <code>DescribeVolumeStatus</code> operation provides the following information about the specified volumes:</p> <p><i>Status</i>: Reflects the current status of the volume. The possible values are <code>ok</code>, <code>impaired</code> , <code>warning</code>, or <code>insufficient-data</code>. If all checks pass, the overall status of the volume is <code>ok</code>. If the check fails, the overall status is <code>impaired</code>. If the status is <code>insufficient-data</code>, then the checks may still be taking place on your volume at the time. We recommend that you retry the request. For more information on volume status, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/monitoring-volume-status.html">Monitoring the Status of Your Volumes</a>.</p> <p><i>Events</i>: Reflect the cause of a volume status and may require you to take action. For example, if your volume returns an <code>impaired</code> status, then the volume event might be <code>potential-data-inconsistency</code>. This means that your volume has been affected by an issue with the underlying host, has all I/O operations disabled, and may have inconsistent data.</p> <p><i>Actions</i>: Reflect the actions you may have to take in response to an event. For example, if the status of the volume is <code>impaired</code> and the volume event shows <code>potential-data-inconsistency</code>, then the action shows <code>enable-volume-io</code>. This means that you may want to enable the I/O operations for the volume by calling the <a>EnableVolumeIO</a> action and then check the volume for data consistency.</p> <note> <p>Volume status is based on the volume status checks, and does not reflect the volume state. Therefore, volume status does not indicate volumes in the <code>error</code> state (for example, when a volume is incapable of accepting I/O.]</p> </note>',
    'DescribeVolumes' => '<p>Describes the specified Amazon EBS volumes.</p> <p>If you are describing a long list of volumes, you can paginate the output to make the list more manageable. The <code>MaxResults</code> parameter sets the maximum number of results returned in a single page. If the list of results exceeds your <code>MaxResults</code> value, then that number of results is returned along with a <code>NextToken</code> value that can be passed to a subsequent <code>DescribeVolumes</code> request to retrieve the remaining results.</p> <p>For more information about Amazon EBS volumes, see <a href=\'http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSVolumes.html\'>Amazon EBS Volumes</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DescribeVpcAttribute' => '<p>Describes the specified attribute of the specified VPC. You can specify only one attribute at a time.</p>',
    'DescribeVpcClassicLink' => '<p>Describes the ClassicLink status of one or more VPCs. </p>',
    'DescribeVpcPeeringConnections' => '<p>Describes one or more of your VPC peering connections.</p>',
    'DescribeVpcs' => '<p>Describes one or more of your VPCs.</p>',
    'DescribeVpnConnections' => '<p>Describes one or more of your VPN connections.</p> <p>For more information about VPN connections, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_VPN.html">Adding a Hardware Virtual Private Gateway to Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'DescribeVpnGateways' => '<p>Describes one or more of your virtual private gateways.</p> <p>For more information about virtual private gateways, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_VPN.html">Adding an IPsec Hardware VPN to Your VPC</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'DetachClassicLinkVpc' => '<p>Unlinks (detaches] a linked EC2-Classic instance from a VPC. After the instance has been unlinked, the VPC security groups are no longer associated with it. An instance is automatically unlinked from a VPC when it\'s stopped.</p>',
    'DetachInternetGateway' => '<p>Detaches an Internet gateway from a VPC, disabling connectivity between the Internet and the VPC. The VPC must not contain any running instances with Elastic IP addresses.</p>',
    'DetachNetworkInterface' => '<p>Detaches a network interface from an instance.</p>',
    'DetachVolume' => '<p>Detaches an Amazon EBS volume from an instance. Make sure to unmount any file systems on the device within your operating system before detaching the volume. Failure to do so results in the volume being stuck in a busy state while detaching.</p> <p>If an Amazon EBS volume is the root device of an instance, it can\'t be detached while the instance is running. To detach the root volume, stop the instance first.</p> <p>When a volume with an AWS Marketplace product code is detached from an instance, the product code is no longer associated with the instance.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-detaching-volume.html">Detaching an Amazon EBS Volume</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'DetachVpnGateway' => '<p>Detaches a virtual private gateway from a VPC. You do this if you\'re planning to turn off the VPC and not use it anymore. You can confirm a virtual private gateway has been completely detached from a VPC by describing the virtual private gateway (any attachments to the virtual private gateway are also described].</p> <p>You must wait for the attachment\'s state to switch to <code>detached</code> before you can delete the VPC or attach a different VPC to the virtual private gateway.</p>',
    'DisableVgwRoutePropagation' => '<p>Disables a virtual private gateway (VGW] from propagating routes to a specified route table of a VPC.</p>',
    'DisableVpcClassicLink' => '<p>Disables ClassicLink for a VPC. You cannot disable ClassicLink for a VPC that has EC2-Classic instances linked to it.</p>',
    'DisassociateAddress' => '<p>Disassociates an Elastic IP address from the instance or network interface it\'s associated with.</p> <p>An Elastic IP address is for use in either the EC2-Classic platform or in a VPC. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/elastic-ip-addresses-eip.html">Elastic IP Addresses</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>This is an idempotent operation. If you perform the operation more than once, Amazon EC2 doesn\'t return an error.</p>',
    'DisassociateRouteTable' => '<p>Disassociates a subnet from a route table.</p> <p>After you perform this action, the subnet no longer uses the routes in the route table. Instead, it uses the routes in the VPC\'s main route table. For more information about route tables, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Route_Tables.html">Route Tables</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'EnableVgwRoutePropagation' => '<p>Enables a virtual private gateway (VGW] to propagate routes to the specified route table of a VPC.</p>',
    'EnableVolumeIO' => '<p>Enables I/O operations for a volume that had I/O operations disabled because the data on the volume was potentially inconsistent.</p>',
    'EnableVpcClassicLink' => '<p>Enables a VPC for ClassicLink. You can then link EC2-Classic instances to your ClassicLink-enabled VPC to allow communication over private IP addresses. You cannot enable your VPC for ClassicLink if any of your VPC\'s route tables have existing routes for address ranges within the <code>10.0.0.0/8</code> IP address range, excluding local routes for VPCs in the <code>10.0.0.0/16</code> and <code>10.1.0.0/16</code> IP address ranges. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/vpc-classiclink.html">ClassicLink</a> in the Amazon Elastic Compute Cloud User Guide for Linux.</p>',
    'GetConsoleOutput' => '<p>Gets the console output for the specified instance.</p> <p>Instances do not have a physical monitor through which you can view their console output. They also lack physical controls that allow you to power up, reboot, or shut them down. To allow these actions, we provide them through the Amazon EC2 API and command line interface.</p> <p>Instance console output is buffered and posted shortly after instance boot, reboot, and termination. Amazon EC2 preserves the most recent 64 KB output which is available for at least one hour after the most recent post.</p> <p>For Linux/Unix instances, the instance console output displays the exact console output that would normally be displayed on a physical monitor attached to a machine. This output is buffered because the instance produces it and then posts it to a store where the instance\'s owner can retrieve it.</p> <p>For Windows instances, the instance console output displays the last three system event log errors.</p>',
    'GetPasswordData' => '<p>Retrieves the encrypted administrator password for an instance running Windows.</p> <p>The Windows password is generated at boot if the <code>EC2Config</code> service plugin, <code>Ec2SetPassword</code>, is enabled. This usually only happens the first time an AMI is launched, and then <code>Ec2SetPassword</code> is automatically disabled. The password is not generated for rebundled AMIs unless <code>Ec2SetPassword</code> is enabled before bundling.</p> <p>The password is encrypted using the key pair that you specified when you launched the instance. You must provide the corresponding key pair file.</p> <p>Password generation and encryption takes a few moments. We recommend that you wait up to 15 minutes after launching an instance before trying to retrieve the generated password.</p>',
    'ImportInstance' => '<p>Creates an import instance task using metadata from the specified disk image. After importing the image, you then upload it using the <function>ec2-import-volume</function> command in the EC2 command line tools. For more information, see <ulink url="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/UploadingYourInstancesandVolumes.html">Using the Command Line Tools to Import Your Virtual Machine to Amazon EC2</ulink> in the <emphasis>Amazon Elastic Compute Cloud User Guide for Linux</emphasis>.</p>',
    'ImportKeyPair' => '<p>Imports the public key from an RSA key pair that you created with a third-party tool. Compare this with <a>CreateKeyPair</a>, in which AWS creates the key pair and gives the keys to you (AWS keeps a copy of the public key]. With ImportKeyPair, you create the key pair and give AWS just the public key. The private key is never transferred between you and AWS.</p> <p>For more information about key pairs, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html">Key Pairs</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'ImportVolume' => '<p>Creates an import volume task using metadata from the specified disk image. After importing the image, you then upload it using the <function>ec2-import-volume</function> command in the Amazon EC2 command-line interface (CLI] tools. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/UploadingYourInstancesandVolumes.html">Using the Command Line Tools to Import Your Virtual Machine to Amazon EC2</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'ModifyImageAttribute' => '<p>Modifies the specified attribute of the specified AMI. You can specify only one attribute at a time.</p> <note><p>AWS Marketplace product codes cannot be modified. Images with an AWS Marketplace product code cannot be made public.</p></note>',
    'ModifyInstanceAttribute' => '<p>Modifies the specified attribute of the specified instance. You can specify only one attribute at a time.</p> <p>To modify some attributes, the instance must be stopped. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Using_ChangingAttributesWhileInstanceStopped.html">Modifying Attributes of a Stopped Instance</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'ModifyNetworkInterfaceAttribute' => '<p>Modifies the specified network interface attribute. You can specify only one attribute at a time.</p>',
    'ModifyReservedInstances' => '<p>Modifies the Availability Zone, instance count, instance type, or network platform (EC2-Classic or EC2-VPC] of your Reserved Instances. The Reserved Instances to be modified must be identical, except for Availability Zone, network platform, and instance type.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ri-modifying.html">Modifying Reserved Instances</a> in the Amazon Elastic Compute Cloud User Guide for Linux.</p>',
    'ModifySnapshotAttribute' => '<p>Adds or removes permission settings for the specified snapshot. You may add or remove specified AWS account IDs from a snapshot\'s list of create volume permissions, but you cannot do both in a single API call. If you need to both add and remove account IDs for a snapshot, you must use multiple API calls.</p> <p>For more information on modifying snapshot permissions, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-modifying-snapshot-permissions.html">Sharing Snapshots</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <note> <p>Snapshots with AWS Marketplace product codes cannot be made public.</p> </note>',
    'ModifySubnetAttribute' => '<p>Modifies a subnet attribute.</p>',
    'ModifyVolumeAttribute' => '<p>Modifies a volume attribute.</p> <p>By default, all I/O operations for the volume are suspended when the data on the volume is determined to be potentially inconsistent, to prevent undetectable, latent data corruption. The I/O access to the volume can be resumed by first enabling I/O access and then checking the data consistency on your volume.</p> <p>You can change the default behavior to resume I/O operations. We recommend that you change this only for boot volumes or for volumes that are stateless or disposable.</p>',
    'ModifyVpcAttribute' => '<p>Modifies the specified attribute of the specified VPC.</p>',
    'MonitorInstances' => '<p>Enables monitoring for a running instance. For more information about monitoring instances, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-cloudwatch.html">Monitoring Your Instances and Volumes</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'PurchaseReservedInstancesOffering' => '<p>Purchases a Reserved Instance for use with your account. With Amazon EC2 Reserved Instances, you obtain a capacity reservation for a certain instance configuration over a specified period of time. You pay a lower usage rate than with On-Demand instances for the time that you actually use the capacity reservation.</p> <p>Use <a>DescribeReservedInstancesOfferings</a> to get a list of Reserved Instance offerings that match your specifications. After you\'ve purchased a Reserved Instance, you can check for your new Reserved Instance with <a>DescribeReservedInstances</a>.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/concepts-on-demand-reserved-instances.html">Reserved Instances</a> and <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ri-market-general.html">Reserved Instance Marketplace</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'RebootInstances' => '<p>Requests a reboot of one or more instances. This operation is asynchronous; it only queues a request to reboot the specified instances. The operation succeeds if the instances are valid and belong to you. Requests to reboot terminated instances are ignored.</p> <p>If a Linux/Unix instance does not cleanly shut down within four minutes, Amazon EC2 performs a hard reboot.</p> <p>For more information about troubleshooting, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instance-console.html">Getting Console Output and Rebooting Instances</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'RegisterImage' => '<p>Registers an AMI. When you\'re creating an AMI, this is the final step you must complete before you can launch an instance from the AMI. For more information about creating AMIs, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/creating-an-ami.html">Creating Your Own AMIs</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <note><p>For Amazon EBS-backed instances, <a>CreateImage</a> creates and registers the AMI in a single request, so you don\'t have to register the AMI yourself.</p></note> <p>You can also use <code>RegisterImage</code> to create an Amazon EBS-backed AMI from a snapshot of a root device volume. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Using_LaunchingInstanceFromSnapshot.html">Launching an Instance from a Snapshot</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>If needed, you can deregister an AMI at any time. Any modifications you make to an AMI backed by an instance store volume invalidates its registration. If you make changes to an image, deregister the previous image and register the new image.</p> <note><p>You can\'t register an image where a secondary (non-root] snapshot has AWS Marketplace product codes.</p></note>',
    'RejectVpcPeeringConnection' => '<p>Rejects a VPC peering connection request. The VPC peering connection must be in the <code>pending-acceptance</code> state. Use the <a>DescribeVpcPeeringConnections</a> request to view your outstanding VPC peering connection requests. To delete an active VPC peering connection, or to delete a VPC peering connection request that you initiated, use <a>DeleteVpcPeeringConnection</a>.</p>',
    'ReleaseAddress' => '<p>Releases the specified Elastic IP address.</p> <p>After releasing an Elastic IP address, it is released to the IP address pool and might be unavailable to you. Be sure to update your DNS records and any servers or devices that communicate with the address. If you attempt to release an Elastic IP address that you already released, you\'ll get an <code>AuthFailure</code> error if the address is already allocated to another AWS account.</p> <p>[EC2-Classic, default VPC] Releasing an Elastic IP address automatically disassociates it from any instance that it\'s associated with. To disassociate an Elastic IP address without releasing it, use <a>DisassociateAddress</a>.</p> <p>[Nondefault VPC] You must use <a>DisassociateAddress</a> to disassociate the Elastic IP address before you try to release it. Otherwise, Amazon EC2 returns an error (<code>InvalidIPAddress.InUse</code>].</p>',
    'ReplaceNetworkAclAssociation' => '<p>Changes which network ACL a subnet is associated with. By default when you create a subnet, it\'s automatically associated with the default network ACL. For more information about network ACLs, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_ACLs.html">Network ACLs</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'ReplaceNetworkAclEntry' => '<p>Replaces an entry (rule] in a network ACL. For more information about network ACLs, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_ACLs.html">Network ACLs</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'ReplaceRoute' => '<p>Replaces an existing route within a route table in a VPC. You must provide only one of the following: Internet gateway or virtual private gateway, NAT instance, VPC peering connection, or network interface.</p> <p>For more information about route tables, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Route_Tables.html">Route Tables</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'ReplaceRouteTableAssociation' => '<p>Changes the route table associated with a given subnet in a VPC. After the operation completes, the subnet uses the routes in the new route table it\'s associated with. For more information about route tables, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_Route_Tables.html">Route Tables</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p> <p>You can also use ReplaceRouteTableAssociation to change which table is the main route table in the VPC. You just specify the main route table\'s association ID and the route table to be the new main route table.</p>',
    'ReportInstanceStatus' => '<p>Submits feedback about the status of an instance. The instance must be in the <code>running</code> state. If your experience with the instance differs from the instance status returned by <a>DescribeInstanceStatus</a>, use <a>ReportInstanceStatus</a> to report your experience with the instance. Amazon EC2 collects this information to improve the accuracy of status checks.</p> <p>Use of this action does not change the value returned by <a>DescribeInstanceStatus</a>.</p>',
    'RequestSpotInstances' => '<p>Creates a Spot Instance request. Spot Instances are instances that Amazon EC2 launches when the bid price that you specify exceeds the current Spot Price. Amazon EC2 periodically sets the Spot Price based on available Spot Instance capacity and current Spot Instance requests. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-requests.html">Spot Instance Requests</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'ResetImageAttribute' => '<p>Resets an attribute of an AMI to its default value.</p> <note><p> The productCodes attribute can\'t be reset. </p></note>',
    'ResetInstanceAttribute' => '<p>Resets an attribute of an instance to its default value. To reset the <code>kernel</code> or <code>ramdisk</code>, the instance must be in a stopped state. To reset the <code>SourceDestCheck</code>, the instance can be either running or stopped.</p> <p>The <code>SourceDestCheck</code> attribute controls whether source/destination checking is enabled. The default value is <code>true</code>, which means checking is enabled. This value must be <code>false</code> for a NAT instance to perform NAT. For more information, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_NAT_Instance.html">NAT Instances</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
    'ResetNetworkInterfaceAttribute' => '<p>Resets a network interface attribute. You can specify only one attribute at a time.</p>',
    'ResetSnapshotAttribute' => '<p>Resets permission settings for the specified snapshot.</p> <p>For more information on modifying snapshot permissions, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-modifying-snapshot-permissions.html">Sharing Snapshots</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'RevokeSecurityGroupEgress' => '<p>Removes one or more egress rules from a security group for EC2-VPC. The values that you specify in the revoke request (for example, ports] must match the existing rule\'s values for the rule to be revoked.</p> <p>Each rule consists of the protocol and the CIDR range or source security group. For the TCP and UDP protocols, you must also specify the destination port or range of ports. For the ICMP protocol, you must also specify the ICMP type and code.</p> <p>Rule changes are propagated to instances within the security group as quickly as possible. However, a small delay might occur.</p>',
    'RevokeSecurityGroupIngress' => '<p>Removes one or more ingress rules from a security group. The values that you specify in the revoke request (for example, ports] must match the existing rule\'s values for the rule to be removed.</p> <p>Each rule consists of the protocol and the CIDR range or source security group. For the TCP and UDP protocols, you must also specify the destination port or range of ports. For the ICMP protocol, you must also specify the ICMP type and code.</p> <p>Rule changes are propagated to instances within the security group as quickly as possible. However, a small delay might occur.</p>',
    'RunInstances' => '<p>Launches the specified number of instances using an AMI for which you have permissions.</p> <p>When you launch an instance, it enters the <code>pending</code> state. After the instance is ready for you, it enters the <code>running</code> state. To check the state of your instance, call <a>DescribeInstances</a>.</p> <p>If you don\'t specify a security group when launching an instance, Amazon EC2 uses the default security group. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-network-security.html">Security Groups</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>Linux instances have access to the public key of the key pair at boot. You can use this key to provide secure access to the instance. Amazon EC2 public images use this feature to provide secure access without passwords. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html">Key Pairs</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>You can provide optional user data when launching an instance. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/AESDG-chapter-instancedata.html">Instance Metadata</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>If any of the AMIs have a product code attached for which the user has not subscribed, <code>RunInstances</code> fails.</p> <p>T2 instance types can only be launched into a VPC. If you do not have a default VPC, or if you do not specify a subnet ID in the request, <code>RunInstances</code> fails.</p> <p>For more information about troubleshooting, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Using_InstanceStraightToTerminated.html">What To Do If An Instance Immediately Terminates</a>, and <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/TroubleshootingInstancesConnecting.html">Troubleshooting Connecting to Your Instance</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'StartInstances' => '<p>Starts an Amazon EBS-backed AMI that you\'ve previously stopped.</p> <p>Instances that use Amazon EBS volumes as their root devices can be quickly stopped and started. When an instance is stopped, the compute resources are released and you are not billed for hourly instance usage. However, your root partition Amazon EBS volume remains, continues to persist your data, and you are charged for Amazon EBS volume usage. You can restart your instance at any time. Each time you transition an instance from stopped to started, Amazon EC2 charges a full instance hour, even if transitions happen multiple times within a single hour.</p> <p>Before stopping an instance, make sure it is in a state from which it can be restarted. Stopping an instance does not preserve data stored in RAM.</p> <p>Performing this operation on an instance that uses an instance store as its root device returns an error.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Stop_Start.html">Stopping Instances</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'StopInstances' => '<p>Stops an Amazon EBS-backed instance. Each time you transition an instance from stopped to started, Amazon EC2 charges a full instance hour, even if transitions happen multiple times within a single hour.</p> <p>You can\'t start or stop Spot Instances.</p> <p>Instances that use Amazon EBS volumes as their root devices can be quickly stopped and started. When an instance is stopped, the compute resources are released and you are not billed for hourly instance usage. However, your root partition Amazon EBS volume remains, continues to persist your data, and you are charged for Amazon EBS volume usage. You can restart your instance at any time.</p> <p>Before stopping an instance, make sure it is in a state from which it can be restarted. Stopping an instance does not preserve data stored in RAM.</p> <p>Performing this operation on an instance that uses an instance store as its root device returns an error.</p> <p>You can stop, start, and terminate EBS-backed instances. You can only terminate instance store-backed instances. What happens to an instance differs if you stop it or terminate it. For example, when you stop an instance, the root device and any other devices attached to the instance persist. When you terminate an instance, the root device and any other devices attached during the instance launch are automatically deleted. For more information about the differences between stopping and terminating instances, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-instance-lifecycle.html">Instance Lifecycle</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>For more information about troubleshooting, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/TroubleshootingInstancesStopping.html">Troubleshooting Stopping Your Instance</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'TerminateInstances' => '<p>Shuts down one or more instances. This operation is idempotent; if you terminate an instance more than once, each call succeeds.</p> <p>Terminated instances remain visible after termination (for approximately one hour].</p> <p>By default, Amazon EC2 deletes all Amazon EBS volumes that were attached when the instance launched. Volumes attached after instance launch continue running.</p> <p>You can stop, start, and terminate EBS-backed instances. You can only terminate instance store-backed instances. What happens to an instance differs if you stop it or terminate it. For example, when you stop an instance, the root device and any other devices attached to the instance persist. When you terminate an instance, the root device and any other devices attached during the instance launch are automatically deleted. For more information about the differences between stopping and terminating instances, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-instance-lifecycle.html">Instance Lifecycle</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>For more information about troubleshooting, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/TroubleshootingInstancesShuttingDown.html">Troubleshooting Terminating Your Instance</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
    'UnassignPrivateIpAddresses' => '<p>Unassigns one or more secondary private IP addresses from a network interface.</p>',
    'UnmonitorInstances' => '<p>Disables monitoring for a running instance. For more information about monitoring instances, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-cloudwatch.html">Monitoring Your Instances and Volumes</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
  ],
  'service' => '<fullname>Amazon Elastic Compute Cloud</fullname> <p>Amazon Elastic Compute Cloud (Amazon EC2] provides resizable computing capacity in the Amazon Web Services (AWS] cloud. Using Amazon EC2 eliminates your need to invest in hardware up front, so you can develop and deploy applications faster.</p>',
  'shapes' => [
    'AcceptVpcPeeringConnectionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AcceptVpcPeeringConnectionResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AccountAttribute' => [
      'base' => '<p>Describes an account attribute.</p>',
      'refs' => [
        'AccountAttributeList$member' => NULL,
      ],
    ],
    'AccountAttributeList' => [
      'base' => NULL,
      'refs' => [
        'DescribeAccountAttributesResult$AccountAttributes' => '<p>Information about one or more account attributes.</p>',
      ],
    ],
    'AccountAttributeName' => [
      'base' => NULL,
      'refs' => [
        'AccountAttributeNameStringList$member' => NULL,
      ],
    ],
    'AccountAttributeNameStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeAccountAttributesRequest$AttributeNames' => '<p>One or more account attribute names.</p>',
      ],
    ],
    'AccountAttributeValue' => [
      'base' => '<p>Describes a value of an account attribute.</p>',
      'refs' => [
        'AccountAttributeValueList$member' => NULL,
      ],
    ],
    'AccountAttributeValueList' => [
      'base' => NULL,
      'refs' => [
        'AccountAttribute$AttributeValues' => '<p>One or more values for the account attribute.</p>',
      ],
    ],
    'Address' => [
      'base' => '<p>Describes an Elastic IP address.</p>',
      'refs' => [
        'AddressList$member' => NULL,
      ],
    ],
    'AddressList' => [
      'base' => NULL,
      'refs' => [
        'DescribeAddressesResult$Addresses' => '<p>Information about one or more Elastic IP addresses.</p>',
      ],
    ],
    'AllocateAddressRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AllocateAddressResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AllocationIdList' => [
      'base' => NULL,
      'refs' => [
        'DescribeAddressesRequest$AllocationIds' => '<p>[EC2-VPC] One or more allocation IDs.</p> <p>Default: Describes all your Elastic IP addresses.</p>',
      ],
    ],
    'ArchitectureValues' => [
      'base' => NULL,
      'refs' => [
        'Image$Architecture' => '<p>The architecture of the image.</p>',
        'ImportInstanceLaunchSpecification$Architecture' => '<p>The architecture of the instance.</p>',
        'Instance$Architecture' => '<p>The architecture of the image.</p>',
        'RegisterImageRequest$Architecture' => '<p>The architecture of the AMI.</p> <p>Default: For Amazon EBS-backed AMIs, <code>i386</code>. For instance store-backed AMIs, the architecture specified in the manifest file.</p>',
      ],
    ],
    'AssignPrivateIpAddressesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AssociateAddressRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AssociateAddressResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AssociateDhcpOptionsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AssociateRouteTableRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AssociateRouteTableResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttachClassicLinkVpcRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttachClassicLinkVpcResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttachInternetGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttachNetworkInterfaceRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttachNetworkInterfaceResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttachVolumeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttachVpnGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttachVpnGatewayResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttachmentStatus' => [
      'base' => NULL,
      'refs' => [
        'EbsInstanceBlockDevice$Status' => '<p>The attachment state.</p>',
        'InstanceNetworkInterfaceAttachment$Status' => '<p>The attachment state.</p>',
        'InternetGatewayAttachment$State' => '<p>The current state of the attachment.</p>',
        'NetworkInterfaceAttachment$Status' => '<p>The attachment state.</p>',
        'VpcAttachment$State' => '<p>The current state of the attachment.</p>',
      ],
    ],
    'AttributeBooleanValue' => [
      'base' => '<p>The value to use when a resource attribute accepts a Boolean value.</p>',
      'refs' => [
        'DescribeNetworkInterfaceAttributeResult$SourceDestCheck' => '<p>Indicates whether source/destination checking is enabled.</p>',
        'DescribeVolumeAttributeResult$AutoEnableIO' => '<p>The state of <code>autoEnableIO</code> attribute.</p>',
        'DescribeVpcAttributeResult$EnableDnsSupport' => '<p>Indicates whether DNS resolution is enabled for the VPC. If this attribute is <code>true</code>, the Amazon DNS server resolves DNS hostnames for your instances to their corresponding IP addresses; otherwise, it does not.</p>',
        'DescribeVpcAttributeResult$EnableDnsHostnames' => '<p>Indicates whether the instances launched in the VPC get DNS hostnames. If this attribute is <code>true</code>, instances in the VPC get DNS hostnames; otherwise, they do not.</p>',
        'InstanceAttribute$DisableApiTermination' => '<p>If the value is <code>true</code>, you can\'t terminate the instance through the Amazon EC2 console, CLI, or API; otherwise, you can.</p>',
        'InstanceAttribute$EbsOptimized' => '<p>Indicates whether the instance is optimized for EBS I/O.</p>',
        'InstanceAttribute$SourceDestCheck' => '<p>Indicates whether source/destination checking is enabled. A value of <code>true</code> means checking is enabled, and <code>false</code> means checking is disabled. This value must be <code>false</code> for a NAT instance to perform NAT.</p>',
        'ModifyInstanceAttributeRequest$SourceDestCheck' => '<p>Specifies whether source/destination checking is enabled. A value of <code>true</code> means that checking is enabled, and <code>false</code> means checking is disabled. This value must be <code>false</code> for a NAT instance to perform NAT.</p>',
        'ModifyInstanceAttributeRequest$DisableApiTermination' => '<p>If the value is <code>true</code>, you can\'t terminate the instance using the Amazon EC2 console, CLI, or API; otherwise, you can.</p>',
        'ModifyInstanceAttributeRequest$EbsOptimized' => '<p>Specifies whether the instance is optimized for EBS I/O. This optimization provides dedicated throughput to Amazon EBS and an optimized configuration stack to provide optimal EBS I/O performance. This optimization isn\'t available with all instance types. Additional usage charges apply when using an EBS Optimized instance.</p>',
        'ModifyNetworkInterfaceAttributeRequest$SourceDestCheck' => '<p>Indicates whether source/destination checking is enabled. A value of <code>true</code> means checking is enabled, and <code>false</code> means checking is disabled. This value must be <code>false</code> for a NAT instance to perform NAT. For more information, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_NAT_Instance.html">NAT Instances</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
        'ModifySubnetAttributeRequest$MapPublicIpOnLaunch' => NULL,
        'ModifyVolumeAttributeRequest$AutoEnableIO' => '<p>Indicates whether the volume should be auto-enabled for I/O operations.</p>',
        'ModifyVpcAttributeRequest$EnableDnsSupport' => '<p>Indicates whether the DNS resolution is supported for the VPC. If enabled, queries to the Amazon provided DNS server at the 169.254.169.253 IP address, or the reserved IP address at the base of the VPC network range "plus two" will succeed. If disabled, the Amazon provided DNS service in the VPC that resolves public DNS hostnames to IP addresses is not enabled.</p>',
        'ModifyVpcAttributeRequest$EnableDnsHostnames' => '<p>Indicates whether the instances launched in the VPC get DNS hostnames. If enabled, instances in the VPC get DNS hostnames; otherwise, they do not.</p> <p>You can only enable DNS hostnames if you also enable DNS support.</p>',
      ],
    ],
    'AttributeValue' => [
      'base' => '<p>The value to use for a resource attribute.</p>',
      'refs' => [
        'DescribeNetworkInterfaceAttributeResult$Description' => '<p>The description of the network interface.</p>',
        'ImageAttribute$KernelId' => '<p>The kernel ID.</p>',
        'ImageAttribute$RamdiskId' => '<p>The RAM disk ID.</p>',
        'ImageAttribute$Description' => '<p>A description for the AMI.</p>',
        'ImageAttribute$SriovNetSupport' => NULL,
        'InstanceAttribute$InstanceType' => '<p>The instance type.</p>',
        'InstanceAttribute$KernelId' => '<p>The kernel ID.</p>',
        'InstanceAttribute$RamdiskId' => '<p>The RAM disk ID.</p>',
        'InstanceAttribute$UserData' => '<p>The Base64-encoded MIME user data.</p>',
        'InstanceAttribute$InstanceInitiatedShutdownBehavior' => '<p>Indicates whether an instance stops or terminates when you initiate shutdown from the instance (using the operating system command for system shutdown].</p>',
        'InstanceAttribute$RootDeviceName' => '<p>The name of the root device (for example, <code>/dev/sda1</code>].</p>',
        'InstanceAttribute$SriovNetSupport' => NULL,
        'ModifyImageAttributeRequest$Description' => '<p>A description for the AMI.</p>',
        'ModifyInstanceAttributeRequest$InstanceType' => '<p>Changes the instance type to the specified value. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instance-types.html">Instance Types</a>. If the instance type is not valid, the error returned is <code>InvalidInstanceAttributeValue</code>.</p>',
        'ModifyInstanceAttributeRequest$Kernel' => '<p>Changes the instance\'s kernel to the specified value. We recommend that you use PV-GRUB instead of kernels and RAM disks. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/UserProvidedKernels.html">PV-GRUB</a>.</p>',
        'ModifyInstanceAttributeRequest$Ramdisk' => '<p>Changes the instance\'s RAM disk to the specified value. We recommend that you use PV-GRUB instead of kernels and RAM disks. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/UserProvidedKernels.html">PV-GRUB</a>.</p>',
        'ModifyInstanceAttributeRequest$InstanceInitiatedShutdownBehavior' => '<p>Specifies whether an instance stops or terminates when you initiate shutdown from the instance (using the operating system command for system shutdown].</p>',
        'ModifyInstanceAttributeRequest$SriovNetSupport' => '<p>Set to <code>simple</code> to enable enhanced networking for the instance.</p> <p>There is no way to disable enhanced networking at this time.</p> <p>This option is supported only for HVM instances. Specifying this option with a PV instance can make it unreachable.</p>',
        'ModifyNetworkInterfaceAttributeRequest$Description' => '<p>A description for the network interface.</p>',
        'DhcpConfigurationValueList$member' => NULL,
      ],
    ],
    'AuthorizeSecurityGroupEgressRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AuthorizeSecurityGroupIngressRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AvailabilityZone' => [
      'base' => '<p>Describes an Availability Zone.</p>',
      'refs' => [
        'AvailabilityZoneList$member' => NULL,
      ],
    ],
    'AvailabilityZoneList' => [
      'base' => NULL,
      'refs' => [
        'DescribeAvailabilityZonesResult$AvailabilityZones' => '<p>Information about one or more Availability Zones.</p>',
      ],
    ],
    'AvailabilityZoneMessage' => [
      'base' => '<p>Describes a message about an Availability Zone.</p>',
      'refs' => [
        'AvailabilityZoneMessageList$member' => NULL,
      ],
    ],
    'AvailabilityZoneMessageList' => [
      'base' => NULL,
      'refs' => [
        'AvailabilityZone$Messages' => '<p>Any messages about the Availability Zone.</p>',
      ],
    ],
    'AvailabilityZoneState' => [
      'base' => NULL,
      'refs' => [
        'AvailabilityZone$State' => '<p>The state of the Availability Zone (<code>available</code> | <code>impaired</code> | <code>unavailable</code>].</p>',
      ],
    ],
    'BlockDeviceMapping' => [
      'base' => '<p>Describes a block device mapping.</p>',
      'refs' => [
        'BlockDeviceMappingList$member' => NULL,
        'BlockDeviceMappingRequestList$member' => NULL,
      ],
    ],
    'BlockDeviceMappingList' => [
      'base' => NULL,
      'refs' => [
        'Image$BlockDeviceMappings' => '<p>Any block device mapping entries.</p>',
        'ImageAttribute$BlockDeviceMappings' => '<p>One or more block device mapping entries.</p>',
        'LaunchSpecification$BlockDeviceMappings' => '<p>One or more block device mapping entries.</p>',
        'RequestSpotLaunchSpecification$BlockDeviceMappings' => '<p>One or more block device mapping entries.</p>',
      ],
    ],
    'BlockDeviceMappingRequestList' => [
      'base' => NULL,
      'refs' => [
        'CreateImageRequest$BlockDeviceMappings' => '<p>Information about one or more block device mappings.</p>',
        'RegisterImageRequest$BlockDeviceMappings' => '<p>One or more block device mapping entries.</p>',
        'RunInstancesRequest$BlockDeviceMappings' => '<p>The block device mapping.</p>',
      ],
    ],
    'Boolean' => [
      'base' => NULL,
      'refs' => [
        'AcceptVpcPeeringConnectionRequest$DryRun' => NULL,
        'AllocateAddressRequest$DryRun' => NULL,
        'AssignPrivateIpAddressesRequest$AllowReassignment' => '<p>Indicates whether to allow an IP address that is already assigned to another network interface or instance to be reassigned to the specified network interface.</p>',
        'AssociateAddressRequest$DryRun' => NULL,
        'AssociateAddressRequest$AllowReassociation' => '<p>[EC2-VPC] Allows an Elastic IP address that is already associated with an instance or network interface to be re-associated with the specified instance or network interface. Otherwise, the operation fails.</p> <p>Default: <code>false</code></p>',
        'AssociateDhcpOptionsRequest$DryRun' => NULL,
        'AssociateRouteTableRequest$DryRun' => NULL,
        'AttachClassicLinkVpcRequest$DryRun' => NULL,
        'AttachClassicLinkVpcResult$Return' => '<p>Returns <code>true</code> if the request succeeds; otherwise, it returns an error.</p>',
        'AttachInternetGatewayRequest$DryRun' => NULL,
        'AttachNetworkInterfaceRequest$DryRun' => NULL,
        'AttachVolumeRequest$DryRun' => NULL,
        'AttachVpnGatewayRequest$DryRun' => NULL,
        'AttributeBooleanValue$Value' => '<p>Valid values are <code>true</code> or <code>false</code>.</p>',
        'AuthorizeSecurityGroupEgressRequest$DryRun' => NULL,
        'AuthorizeSecurityGroupIngressRequest$DryRun' => NULL,
        'BundleInstanceRequest$DryRun' => NULL,
        'CancelBundleTaskRequest$DryRun' => NULL,
        'CancelConversionRequest$DryRun' => NULL,
        'CancelSpotInstanceRequestsRequest$DryRun' => NULL,
        'ConfirmProductInstanceRequest$DryRun' => NULL,
        'CopyImageRequest$DryRun' => NULL,
        'CopySnapshotRequest$DryRun' => NULL,
        'CreateCustomerGatewayRequest$DryRun' => NULL,
        'CreateDhcpOptionsRequest$DryRun' => NULL,
        'CreateImageRequest$DryRun' => NULL,
        'CreateImageRequest$NoReboot' => '<p>By default, this parameter is set to <code>false</code>, which means Amazon EC2 attempts to shut down the instance cleanly before image creation and then reboots the instance. When the parameter is set to <code>true</code>, Amazon EC2 doesn\'t shut down the instance before creating the image. When this option is used, file system integrity on the created image can\'t be guaranteed.</p>',
        'CreateInternetGatewayRequest$DryRun' => NULL,
        'CreateKeyPairRequest$DryRun' => NULL,
        'CreateNetworkAclEntryRequest$DryRun' => NULL,
        'CreateNetworkAclEntryRequest$Egress' => '<p>Indicates whether this is an egress rule (rule is applied to traffic leaving the subnet].</p>',
        'CreateNetworkAclRequest$DryRun' => NULL,
        'CreateNetworkInterfaceRequest$DryRun' => NULL,
        'CreatePlacementGroupRequest$DryRun' => NULL,
        'CreateRouteRequest$DryRun' => NULL,
        'CreateRouteTableRequest$DryRun' => NULL,
        'CreateSecurityGroupRequest$DryRun' => NULL,
        'CreateSnapshotRequest$DryRun' => NULL,
        'CreateSpotDatafeedSubscriptionRequest$DryRun' => NULL,
        'CreateSubnetRequest$DryRun' => NULL,
        'CreateTagsRequest$DryRun' => NULL,
        'CreateVolumeRequest$DryRun' => NULL,
        'CreateVolumeRequest$Encrypted' => '<p>Specifies whether the volume should be encrypted. Encrypted Amazon EBS volumes may only be attached to instances that support Amazon EBS encryption. Volumes that are created from encrypted snapshots are automatically encrypted. There is no way to create an encrypted volume from an unencrypted snapshot or vice versa. If your AMI uses encrypted volumes, you can only launch it on supported instance types. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSEncryption.html">Amazon EBS Encryption</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>. </p>',
        'CreateVpcPeeringConnectionRequest$DryRun' => NULL,
        'CreateVpcRequest$DryRun' => NULL,
        'CreateVpnConnectionRequest$DryRun' => NULL,
        'CreateVpnGatewayRequest$DryRun' => NULL,
        'DeleteCustomerGatewayRequest$DryRun' => NULL,
        'DeleteDhcpOptionsRequest$DryRun' => NULL,
        'DeleteInternetGatewayRequest$DryRun' => NULL,
        'DeleteKeyPairRequest$DryRun' => NULL,
        'DeleteNetworkAclEntryRequest$DryRun' => NULL,
        'DeleteNetworkAclEntryRequest$Egress' => '<p>Indicates whether the rule is an egress rule.</p>',
        'DeleteNetworkAclRequest$DryRun' => NULL,
        'DeleteNetworkInterfaceRequest$DryRun' => NULL,
        'DeletePlacementGroupRequest$DryRun' => NULL,
        'DeleteRouteRequest$DryRun' => NULL,
        'DeleteRouteTableRequest$DryRun' => NULL,
        'DeleteSecurityGroupRequest$DryRun' => NULL,
        'DeleteSnapshotRequest$DryRun' => NULL,
        'DeleteSpotDatafeedSubscriptionRequest$DryRun' => NULL,
        'DeleteSubnetRequest$DryRun' => NULL,
        'DeleteTagsRequest$DryRun' => NULL,
        'DeleteVolumeRequest$DryRun' => NULL,
        'DeleteVpcPeeringConnectionRequest$DryRun' => NULL,
        'DeleteVpcPeeringConnectionResult$Return' => '<p>Returns <code>true</code> if the request succeeds; otherwise, it returns an error.</p>',
        'DeleteVpcRequest$DryRun' => NULL,
        'DeleteVpnConnectionRequest$DryRun' => NULL,
        'DeleteVpnGatewayRequest$DryRun' => NULL,
        'DeregisterImageRequest$DryRun' => NULL,
        'DescribeAccountAttributesRequest$DryRun' => NULL,
        'DescribeAddressesRequest$DryRun' => NULL,
        'DescribeAvailabilityZonesRequest$DryRun' => NULL,
        'DescribeBundleTasksRequest$DryRun' => NULL,
        'DescribeClassicLinkInstancesRequest$DryRun' => NULL,
        'DescribeConversionTasksRequest$DryRun' => NULL,
        'DescribeCustomerGatewaysRequest$DryRun' => NULL,
        'DescribeDhcpOptionsRequest$DryRun' => NULL,
        'DescribeImageAttributeRequest$DryRun' => NULL,
        'DescribeImagesRequest$DryRun' => NULL,
        'DescribeInstanceAttributeRequest$DryRun' => NULL,
        'DescribeInstanceStatusRequest$DryRun' => NULL,
        'DescribeInstanceStatusRequest$IncludeAllInstances' => '<p>When <code>true</code>, includes the health status for all instances. When <code>false</code>, includes the health status for running instances only.</p> <p>Default: <code>false</code></p>',
        'DescribeInstancesRequest$DryRun' => NULL,
        'DescribeInternetGatewaysRequest$DryRun' => NULL,
        'DescribeKeyPairsRequest$DryRun' => NULL,
        'DescribeNetworkAclsRequest$DryRun' => NULL,
        'DescribeNetworkInterfaceAttributeRequest$DryRun' => NULL,
        'DescribeNetworkInterfacesRequest$DryRun' => NULL,
        'DescribePlacementGroupsRequest$DryRun' => NULL,
        'DescribeRegionsRequest$DryRun' => NULL,
        'DescribeReservedInstancesOfferingsRequest$DryRun' => NULL,
        'DescribeReservedInstancesOfferingsRequest$IncludeMarketplace' => '<p>Include Marketplace offerings in the response.</p>',
        'DescribeReservedInstancesRequest$DryRun' => NULL,
        'DescribeRouteTablesRequest$DryRun' => NULL,
        'DescribeSecurityGroupsRequest$DryRun' => NULL,
        'DescribeSnapshotAttributeRequest$DryRun' => NULL,
        'DescribeSnapshotsRequest$DryRun' => NULL,
        'DescribeSpotDatafeedSubscriptionRequest$DryRun' => NULL,
        'DescribeSpotInstanceRequestsRequest$DryRun' => NULL,
        'DescribeSpotPriceHistoryRequest$DryRun' => NULL,
        'DescribeSubnetsRequest$DryRun' => NULL,
        'DescribeTagsRequest$DryRun' => NULL,
        'DescribeVolumeAttributeRequest$DryRun' => NULL,
        'DescribeVolumeStatusRequest$DryRun' => NULL,
        'DescribeVolumesRequest$DryRun' => NULL,
        'DescribeVpcAttributeRequest$DryRun' => NULL,
        'DescribeVpcClassicLinkRequest$DryRun' => NULL,
        'DescribeVpcPeeringConnectionsRequest$DryRun' => NULL,
        'DescribeVpcsRequest$DryRun' => NULL,
        'DescribeVpnConnectionsRequest$DryRun' => NULL,
        'DescribeVpnGatewaysRequest$DryRun' => NULL,
        'DetachClassicLinkVpcRequest$DryRun' => NULL,
        'DetachClassicLinkVpcResult$Return' => '<p>Returns <code>true</code> if the request succeeds; otherwise, it returns an error.</p>',
        'DetachInternetGatewayRequest$DryRun' => NULL,
        'DetachNetworkInterfaceRequest$DryRun' => NULL,
        'DetachNetworkInterfaceRequest$Force' => '<p>Specifies whether to force a detachment.</p>',
        'DetachVolumeRequest$DryRun' => NULL,
        'DetachVolumeRequest$Force' => '<p>Forces detachment if the previous detachment attempt did not occur cleanly (for example, logging into an instance, unmounting the volume, and detaching normally]. This option can lead to data loss or a corrupted file system. Use this option only as a last resort to detach a volume from a failed instance. The instance won\'t have an opportunity to flush file system caches or file system metadata. If you use this option, you must perform file system check and repair procedures.</p>',
        'DetachVpnGatewayRequest$DryRun' => NULL,
        'DisableVpcClassicLinkRequest$DryRun' => NULL,
        'DisableVpcClassicLinkResult$Return' => '<p>Returns <code>true</code> if the request succeeds; otherwise, it returns an error.</p>',
        'DisassociateAddressRequest$DryRun' => NULL,
        'DisassociateRouteTableRequest$DryRun' => NULL,
        'EbsBlockDevice$DeleteOnTermination' => '<p>Indicates whether the Amazon EBS volume is deleted on instance termination.</p>',
        'EbsBlockDevice$Encrypted' => '<p>Indicates whether the Amazon EBS volume is encrypted. Encrypted Amazon EBS volumes may only be attached to instances that support Amazon EBS encryption.</p>',
        'EbsInstanceBlockDevice$DeleteOnTermination' => '<p>Indicates whether the volume is deleted on instance termination.</p>',
        'EbsInstanceBlockDeviceSpecification$DeleteOnTermination' => '<p>Indicates whether the volume is deleted on instance termination.</p>',
        'EnableVolumeIORequest$DryRun' => NULL,
        'EnableVpcClassicLinkRequest$DryRun' => NULL,
        'EnableVpcClassicLinkResult$Return' => '<p>Returns <code>true</code> if the request succeeds; otherwise, it returns an error.</p>',
        'GetConsoleOutputRequest$DryRun' => NULL,
        'GetPasswordDataRequest$DryRun' => NULL,
        'Image$Public' => '<p>Indicates whether the image has public launch permissions. The value is <code>true</code> if this image has public launch permissions or <code>false</code> if it has only implicit and explicit launch permissions.</p>',
        'ImportInstanceLaunchSpecification$Monitoring' => NULL,
        'ImportInstanceRequest$DryRun' => NULL,
        'ImportKeyPairRequest$DryRun' => NULL,
        'ImportVolumeRequest$DryRun' => NULL,
        'Instance$SourceDestCheck' => '<p>Specifies whether to enable an instance launched in a VPC to perform NAT. This controls whether source/destination checking is enabled on the instance. A value of <code>true</code> means checking is enabled, and <code>false</code> means checking is disabled. The value must be <code>false</code> for the instance to perform NAT. For more information, see <a href="http://docs.aws.amazon.com/AmazonVPC/latest/UserGuide/VPC_NAT_Instance.html">NAT Instances</a> in the <i>Amazon Virtual Private Cloud User Guide</i>.</p>',
        'Instance$EbsOptimized' => '<p>Indicates whether the instance is optimized for EBS I/O. This optimization provides dedicated throughput to Amazon EBS and an optimized configuration stack to provide optimal I/O performance. This optimization isn\'t available with all instance types. Additional usage charges apply when using an EBS Optimized instance.</p>',
        'InstanceNetworkInterface$SourceDestCheck' => '<p>Indicates whether to validate network traffic to or from this network interface.</p>',
        'InstanceNetworkInterfaceAttachment$DeleteOnTermination' => '<p>Indicates whether the network interface is deleted when the instance is terminated.</p>',
        'InstanceNetworkInterfaceSpecification$DeleteOnTermination' => '<p>If set to <code>true</code>, the interface is deleted when the instance is terminated. You can specify <code>true</code> only if creating a new network interface when launching an instance.</p>',
        'InstanceNetworkInterfaceSpecification$AssociatePublicIpAddress' => '<p>Indicates whether to assign a public IP address to an instance you launch in a VPC. The public IP address can only be assigned to a network interface for eth0, and can only be assigned to a new network interface, not an existing one. You cannot specify more than one network interface in the request. If luanching into a default subnet, the default value is <code>true</code>.</p>',
        'InstancePrivateIpAddress$Primary' => '<p>Indicates whether this IP address is the primary private IP address of the network interface.</p>',
        'LaunchSpecification$EbsOptimized' => '<p>Indicates whether the instance is optimized for EBS I/O. This optimization provides dedicated throughput to Amazon EBS and an optimized configuration stack to provide optimal EBS I/O performance. This optimization isn\'t available with all instance types. Additional usage charges apply when using an EBS Optimized instance.</p> <p>Default: <code>false</code></p>',
        'ModifyImageAttributeRequest$DryRun' => NULL,
        'ModifyInstanceAttributeRequest$DryRun' => NULL,
        'ModifyNetworkInterfaceAttributeRequest$DryRun' => NULL,
        'ModifySnapshotAttributeRequest$DryRun' => NULL,
        'ModifyVolumeAttributeRequest$DryRun' => NULL,
        'MonitorInstancesRequest$DryRun' => NULL,
        'NetworkAcl$IsDefault' => '<p>Indicates whether this is the default network ACL for the VPC.</p>',
        'NetworkAclEntry$Egress' => '<p>Indicates whether the rule is an egress rule (applied to traffic leaving the subnet].</p>',
        'NetworkInterface$RequesterManaged' => '<p>Indicates whether the network interface is being managed by AWS.</p>',
        'NetworkInterface$SourceDestCheck' => '<p>Indicates whether traffic to or from the instance is validated.</p>',
        'NetworkInterfaceAttachment$DeleteOnTermination' => '<p>Indicates whether the network interface is deleted when the instance is terminated.</p>',
        'NetworkInterfaceAttachmentChanges$DeleteOnTermination' => '<p>Indicates whether the network interface is deleted when the instance is terminated.</p>',
        'NetworkInterfacePrivateIpAddress$Primary' => '<p>Indicates whether this IP address is the primary private IP address of the network interface.</p>',
        'PriceSchedule$Active' => '<p>The current price schedule, as determined by the term remaining for the Reserved Instance in the listing.</p> <p>A specific price schedule is always in effect, but only one price schedule can be active at any time. Take, for example, a Reserved Instance listing that has five months remaining in its term. When you specify price schedules for five months and two months, this means that schedule 1, covering the first three months of the remaining term, will be active during months 5, 4, and 3. Then schedule 2, covering the last two months of the term, will be active for months 2 and 1.</p>',
        'PrivateIpAddressSpecification$Primary' => '<p>Indicates whether the private IP address is the primary private IP address. Only one IP address can be designated as primary.</p>',
        'PurchaseReservedInstancesOfferingRequest$DryRun' => NULL,
        'RebootInstancesRequest$DryRun' => NULL,
        'RegisterImageRequest$DryRun' => NULL,
        'RejectVpcPeeringConnectionRequest$DryRun' => NULL,
        'RejectVpcPeeringConnectionResult$Return' => '<p>Returns <code>true</code> if the request succeeds; otherwise, it returns an error.</p>',
        'ReleaseAddressRequest$DryRun' => NULL,
        'ReplaceNetworkAclAssociationRequest$DryRun' => NULL,
        'ReplaceNetworkAclEntryRequest$DryRun' => NULL,
        'ReplaceNetworkAclEntryRequest$Egress' => '<p>Indicates whether to replace the egress rule.</p> <p>Default: If no value is specified, we replace the ingress rule.</p>',
        'ReplaceRouteRequest$DryRun' => NULL,
        'ReplaceRouteTableAssociationRequest$DryRun' => NULL,
        'ReportInstanceStatusRequest$DryRun' => NULL,
        'RequestSpotInstancesRequest$DryRun' => NULL,
        'ReservedInstancesOffering$Marketplace' => '<p>Indicates whether the offering is available through the Reserved Instance Marketplace (resale] or AWS. If it\'s a Reserved Instance Marketplace offering, this is <code>true</code>.</p>',
        'ResetImageAttributeRequest$DryRun' => NULL,
        'ResetInstanceAttributeRequest$DryRun' => NULL,
        'ResetNetworkInterfaceAttributeRequest$DryRun' => NULL,
        'ResetSnapshotAttributeRequest$DryRun' => NULL,
        'RevokeSecurityGroupEgressRequest$DryRun' => NULL,
        'RevokeSecurityGroupIngressRequest$DryRun' => NULL,
        'RouteTableAssociation$Main' => '<p>Indicates whether this is the main route table.</p>',
        'RunInstancesMonitoringEnabled$Enabled' => '<p>Indicates whether monitoring is enabled for the instance.</p>',
        'RunInstancesRequest$DryRun' => NULL,
        'RunInstancesRequest$DisableApiTermination' => '<p>If you set this parameter to <code>true</code>, you can\'t terminate the instance using the Amazon EC2 console, CLI, or API; otherwise, you can. If you set this parameter to <code>true</code> and then later want to be able to terminate the instance, you must first change the value of the <code>disableApiTermination</code> attribute to <code>false</code> using <a>ModifyInstanceAttribute</a>. Alternatively, if you set <code>InstanceInitiatedShutdownBehavior</code> to <code>terminate</code>, you can terminate the instance by running the shutdown command from the instance.</p> <p>Default: <code>false</code></p>',
        'RunInstancesRequest$EbsOptimized' => '<p>Indicates whether the instance is optimized for EBS I/O. This optimization provides dedicated throughput to Amazon EBS and an optimized configuration stack to provide optimal Amazon EBS I/O performance. This optimization isn\'t available with all instance types. Additional usage charges apply when using an EBS-optimized instance.</p> <p>Default: <code>false</code></p>',
        'Snapshot$Encrypted' => '<p>Indicates whether the snapshot is encrypted.</p>',
        'StartInstancesRequest$DryRun' => NULL,
        'StopInstancesRequest$DryRun' => NULL,
        'StopInstancesRequest$Force' => '<p>Forces the instances to stop. The instances do not have an opportunity to flush file system caches or file system metadata. If you use this option, you must perform file system check and repair procedures. This option is not recommended for Windows instances.</p> <p>Default: <code>false</code></p>',
        'Subnet$DefaultForAz' => '<p>Indicates whether this is the default subnet for the Availability Zone.</p>',
        'Subnet$MapPublicIpOnLaunch' => '<p>Indicates whether instances launched in this subnet receive a public IP address.</p>',
        'TerminateInstancesRequest$DryRun' => NULL,
        'UnmonitorInstancesRequest$DryRun' => NULL,
        'Volume$Encrypted' => '<p>Indicates whether the volume will be encrypted.</p>',
        'VolumeAttachment$DeleteOnTermination' => '<p>Indicates whether the Amazon EBS volume is deleted on instance termination.</p>',
        'Vpc$IsDefault' => '<p>Indicates whether the VPC is the default VPC.</p>',
        'VpcClassicLink$ClassicLinkEnabled' => '<p>Indicates whether the VPC is enabled for ClassicLink.</p>',
        'VpnConnectionOptions$StaticRoutesOnly' => '<p>Indicates whether the VPN connection uses static routes only. Static routes must be used for devices that don\'t support BGP.</p>',
        'VpnConnectionOptionsSpecification$StaticRoutesOnly' => '<p>Indicates whether the VPN connection uses static routes only. Static routes must be used for devices that don\'t support BGP.</p>',
        'RequestSpotLaunchSpecification$EbsOptimized' => '<p>Indicates whether the instance is optimized for EBS I/O. This optimization provides dedicated throughput to Amazon EBS and an optimized configuration stack to provide optimal EBS I/O performance. This optimization isn\'t available with all instance types. Additional usage charges apply when using an EBS Optimized instance.</p> <p>Default: <code>false</code></p>',
      ],
    ],
    'BundleIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeBundleTasksRequest$BundleIds' => '<p>One or more bundle task IDs.</p> <p>Default: Describes all your bundle tasks.</p>',
      ],
    ],
    'BundleInstanceRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'BundleInstanceResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'BundleTask' => [
      'base' => '<p>Describes a bundle task.</p>',
      'refs' => [
        'BundleInstanceResult$BundleTask' => '<p>Information about the bundle task.</p>',
        'BundleTaskList$member' => NULL,
        'CancelBundleTaskResult$BundleTask' => '<p>The bundle task.</p>',
      ],
    ],
    'BundleTaskError' => [
      'base' => '<p>Describes an error for <a>BundleInstance</a>.</p>',
      'refs' => [
        'BundleTask$BundleTaskError' => '<p>If the task fails, a description of the error.</p>',
      ],
    ],
    'BundleTaskList' => [
      'base' => NULL,
      'refs' => [
        'DescribeBundleTasksResult$BundleTasks' => '<p>Information about one or more bundle tasks.</p>',
      ],
    ],
    'BundleTaskState' => [
      'base' => NULL,
      'refs' => [
        'BundleTask$State' => '<p>The state of the task.</p>',
      ],
    ],
    'CancelBundleTaskRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CancelBundleTaskResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CancelConversionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CancelExportTaskRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CancelReservedInstancesListingRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CancelReservedInstancesListingResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CancelSpotInstanceRequestState' => [
      'base' => NULL,
      'refs' => [
        'CancelledSpotInstanceRequest$State' => '<p>The state of the Spot Instance request.</p>',
      ],
    ],
    'CancelSpotInstanceRequestsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CancelSpotInstanceRequestsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CancelledSpotInstanceRequest' => [
      'base' => '<p>Describes a request to cancel a Spot Instance.</p>',
      'refs' => [
        'CancelledSpotInstanceRequestList$member' => NULL,
      ],
    ],
    'CancelledSpotInstanceRequestList' => [
      'base' => NULL,
      'refs' => [
        'CancelSpotInstanceRequestsResult$CancelledSpotInstanceRequests' => '<p>One or more Spot Instance requests.</p>',
      ],
    ],
    'ClassicLinkInstance' => [
      'base' => '<p>Describes a linked EC2-Classic instance.</p>',
      'refs' => [
        'ClassicLinkInstanceList$member' => NULL,
      ],
    ],
    'ClassicLinkInstanceList' => [
      'base' => NULL,
      'refs' => [
        'DescribeClassicLinkInstancesResult$Instances' => '<p>Information about one or more linked EC2-Classic instances.</p>',
      ],
    ],
    'ConfirmProductInstanceRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ConfirmProductInstanceResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ContainerFormat' => [
      'base' => NULL,
      'refs' => [
        'ExportToS3Task$ContainerFormat' => '<p>The container format used to combine disk images with metadata (such as OVF]. If absent, only the disk image is exported.</p>',
        'ExportToS3TaskSpecification$ContainerFormat' => NULL,
      ],
    ],
    'ConversionIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeConversionTasksRequest$ConversionTaskIds' => '<p>One or more conversion task IDs.</p>',
      ],
    ],
    'ConversionTask' => [
      'base' => '<p>Describes a conversion task.</p>',
      'refs' => [
        'DescribeConversionTaskList$member' => NULL,
        'ImportInstanceResult$ConversionTask' => NULL,
        'ImportVolumeResult$ConversionTask' => NULL,
      ],
    ],
    'ConversionTaskState' => [
      'base' => NULL,
      'refs' => [
        'ConversionTask$State' => '<p>The state of the conversion task.</p>',
      ],
    ],
    'CopyImageRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CopyImageResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CopySnapshotRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CopySnapshotResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateCustomerGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateCustomerGatewayResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateDhcpOptionsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateDhcpOptionsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateImageRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateImageResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateInstanceExportTaskRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateInstanceExportTaskResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateInternetGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateInternetGatewayResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateKeyPairRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateNetworkAclEntryRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateNetworkAclRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateNetworkAclResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateNetworkInterfaceRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateNetworkInterfaceResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreatePlacementGroupRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateReservedInstancesListingRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateReservedInstancesListingResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateRouteRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateRouteTableRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateRouteTableResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSecurityGroupRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSecurityGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSnapshotRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSpotDatafeedSubscriptionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSpotDatafeedSubscriptionResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSubnetRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSubnetResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateTagsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVolumePermission' => [
      'base' => NULL,
      'refs' => [
        'CreateVolumePermissionList$member' => NULL,
      ],
    ],
    'CreateVolumePermissionList' => [
      'base' => NULL,
      'refs' => [
        'CreateVolumePermissionModifications$Add' => '<p>Adds a specific AWS account ID or group to a volume\'s list of create volume permissions.</p>',
        'CreateVolumePermissionModifications$Remove' => '<p>Removes a specific AWS account ID or group from a volume\'s list of create volume permissions.</p>',
        'DescribeSnapshotAttributeResult$CreateVolumePermissions' => '<p>A list of permissions for creating volumes from the snapshot.</p>',
      ],
    ],
    'CreateVolumePermissionModifications' => [
      'base' => NULL,
      'refs' => [
        'ModifySnapshotAttributeRequest$CreateVolumePermission' => '<p>A JSON representation of the snapshot attribute modification.</p>',
      ],
    ],
    'CreateVolumeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVpcPeeringConnectionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVpcPeeringConnectionResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVpcRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVpcResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVpnConnectionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVpnConnectionResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVpnConnectionRouteRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVpnGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateVpnGatewayResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CurrencyCodeValues' => [
      'base' => NULL,
      'refs' => [
        'PriceSchedule$CurrencyCode' => '<p>The currency for transacting the Reserved Instance resale. At this time, the only supported currency is <code>USD</code>.</p>',
        'PriceScheduleSpecification$CurrencyCode' => '<p>The currency for transacting the Reserved Instance resale. At this time, the only supported currency is <code>USD</code>.</p>',
        'ReservedInstanceLimitPrice$CurrencyCode' => '<p>The currency in which the <code>limitPrice</code> amount is specified. At this time, the only supported currency is <code>USD</code>.</p>',
        'ReservedInstances$CurrencyCode' => '<p>The currency of the Reserved Instance. It\'s specified using ISO 4217 standard currency codes. At this time, the only supported currency is <code>USD</code>.</p>',
        'ReservedInstancesOffering$CurrencyCode' => '<p>The currency of the Reserved Instance offering you are purchasing. It\'s specified using ISO 4217 standard currency codes. At this time, the only supported currency is <code>USD</code>.</p>',
      ],
    ],
    'CustomerGateway' => [
      'base' => '<p>Describes a customer gateway.</p>',
      'refs' => [
        'CreateCustomerGatewayResult$CustomerGateway' => '<p>Information about the customer gateway.</p>',
        'CustomerGatewayList$member' => NULL,
      ],
    ],
    'CustomerGatewayIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeCustomerGatewaysRequest$CustomerGatewayIds' => '<p>One or more customer gateway IDs.</p> <p>Default: Describes all your customer gateways.</p>',
      ],
    ],
    'CustomerGatewayList' => [
      'base' => NULL,
      'refs' => [
        'DescribeCustomerGatewaysResult$CustomerGateways' => '<p>Information about one or more customer gateways.</p>',
      ],
    ],
    'DatafeedSubscriptionState' => [
      'base' => NULL,
      'refs' => [
        'SpotDatafeedSubscription$State' => '<p>The state of the Spot Instance data feed subscription.</p>',
      ],
    ],
    'DateTime' => [
      'base' => NULL,
      'refs' => [
        'BundleTask$StartTime' => '<p>The time this task started.</p>',
        'BundleTask$UpdateTime' => '<p>The time of the most recent update for the task.</p>',
        'DescribeSpotPriceHistoryRequest$StartTime' => '<p>The date and time, up to the past 90 days, from which to start retrieving the price history data.</p>',
        'DescribeSpotPriceHistoryRequest$EndTime' => '<p>The date and time, up to the current date, from which to stop retrieving the price history data.</p>',
        'EbsInstanceBlockDevice$AttachTime' => '<p>The time stamp when the attachment initiated.</p>',
        'GetConsoleOutputResult$Timestamp' => '<p>The time the output was last updated.</p>',
        'GetPasswordDataResult$Timestamp' => '<p>The time the data was last updated.</p>',
        'Instance$LaunchTime' => '<p>The time the instance was launched.</p>',
        'InstanceNetworkInterfaceAttachment$AttachTime' => '<p>The time stamp when the attachment initiated.</p>',
        'InstanceStatusDetails$ImpairedSince' => '<p>The time when a status check failed. For an instance that was launched and impaired, this is the time when the instance was launched.</p>',
        'InstanceStatusEvent$NotBefore' => '<p>The earliest scheduled start time for the event.</p>',
        'InstanceStatusEvent$NotAfter' => '<p>The latest scheduled end time for the event.</p>',
        'NetworkInterfaceAttachment$AttachTime' => '<p>The timestamp indicating when the attachment initiated.</p>',
        'ReportInstanceStatusRequest$StartTime' => '<p>The time at which the reported instance health state began.</p>',
        'ReportInstanceStatusRequest$EndTime' => '<p>The time at which the reported instance health state ended.</p>',
        'RequestSpotInstancesRequest$ValidFrom' => '<p>The start date of the request. If this is a one-time request, the request becomes active at this date and time and remains active until all instances launch, the request expires, or the request is canceled. If the request is persistent, the request becomes active at this date and time and remains active until it expires or is canceled.</p> <p>Default: The request is effective indefinitely.</p>',
        'RequestSpotInstancesRequest$ValidUntil' => '<p>The end date of the request. If this is a one-time request, the request remains active until all instances launch, the request is canceled, or this date is reached. If the request is persistent, it remains active until it is canceled or this date and time is reached.</p> <p>Default: The request is effective indefinitely.</p>',
        'ReservedInstances$Start' => '<p>The date and time the Reserved Instance started.</p>',
        'ReservedInstances$End' => '<p>The time when the Reserved Instance expires.</p>',
        'ReservedInstancesListing$CreateDate' => '<p>The time the listing was created.</p>',
        'ReservedInstancesListing$UpdateDate' => '<p>The last modified timestamp of the listing.</p>',
        'ReservedInstancesModification$CreateDate' => '<p>The time when the modification request was created.</p>',
        'ReservedInstancesModification$UpdateDate' => '<p>The time when the modification request was last updated.</p>',
        'ReservedInstancesModification$EffectiveDate' => '<p>The time for the modification to become effective.</p>',
        'Snapshot$StartTime' => '<p>The time stamp when the snapshot was initiated.</p>',
        'SpotInstanceRequest$ValidFrom' => '<p>The start date of the request. If this is a one-time request, the request becomes active at this date and time and remains active until all instances launch, the request expires, or the request is canceled. If the request is persistent, the request becomes active at this date and time and remains active until it expires or is canceled.</p>',
        'SpotInstanceRequest$ValidUntil' => '<p>The end date of the request. If this is a one-time request, the request remains active until all instances launch, the request is canceled, or this date is reached. If the request is persistent, it remains active until it is canceled or this date is reached.</p>',
        'SpotInstanceRequest$CreateTime' => '<p>The time stamp when the Spot Instance request was created.</p>',
        'SpotInstanceStatus$UpdateTime' => '<p>The time of the most recent status update.</p>',
        'SpotPrice$Timestamp' => '<p>The date and time the request was created.</p>',
        'VgwTelemetry$LastStatusChange' => '<p>The date and time of the last change in status.</p>',
        'Volume$CreateTime' => '<p>The time stamp when volume creation was initiated.</p>',
        'VolumeAttachment$AttachTime' => '<p>The time stamp when the attachment initiated.</p>',
        'VolumeStatusEvent$NotBefore' => '<p>The earliest start time of the event.</p>',
        'VolumeStatusEvent$NotAfter' => '<p>The latest end time of the event.</p>',
        'VpcPeeringConnection$ExpirationTime' => '<p>The time that an unaccepted VPC peering connection will expire.</p>',
      ],
    ],
    'DeleteCustomerGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteDhcpOptionsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteInternetGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteKeyPairRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteNetworkAclEntryRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteNetworkAclRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteNetworkInterfaceRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeletePlacementGroupRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteRouteRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteRouteTableRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteSecurityGroupRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteSnapshotRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteSpotDatafeedSubscriptionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteSubnetRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteTagsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteVolumeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteVpcPeeringConnectionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteVpcPeeringConnectionResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteVpcRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteVpnConnectionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteVpnConnectionRouteRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteVpnGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeregisterImageRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAccountAttributesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAccountAttributesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAddressesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAddressesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAvailabilityZonesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAvailabilityZonesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeBundleTasksRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeBundleTasksResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeClassicLinkInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeClassicLinkInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeConversionTaskList' => [
      'base' => NULL,
      'refs' => [
        'DescribeConversionTasksResult$ConversionTasks' => NULL,
      ],
    ],
    'DescribeConversionTasksRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeConversionTasksResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeCustomerGatewaysRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeCustomerGatewaysResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeDhcpOptionsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeDhcpOptionsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeExportTasksRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeExportTasksResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeImageAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeImagesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeImagesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeInstanceAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeInstanceStatusRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeInstanceStatusResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeInternetGatewaysRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeInternetGatewaysResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeKeyPairsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeKeyPairsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeNetworkAclsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeNetworkAclsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeNetworkInterfaceAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeNetworkInterfaceAttributeResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeNetworkInterfacesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeNetworkInterfacesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribePlacementGroupsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribePlacementGroupsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeRegionsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeRegionsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeReservedInstancesListingsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeReservedInstancesListingsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeReservedInstancesModificationsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeReservedInstancesModificationsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeReservedInstancesOfferingsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeReservedInstancesOfferingsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeReservedInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeReservedInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeRouteTablesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeRouteTablesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSecurityGroupsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSecurityGroupsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSnapshotAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSnapshotAttributeResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSnapshotsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSnapshotsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSpotDatafeedSubscriptionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSpotDatafeedSubscriptionResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSpotInstanceRequestsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSpotInstanceRequestsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSpotPriceHistoryRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSpotPriceHistoryResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSubnetsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSubnetsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeTagsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeTagsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVolumeAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVolumeAttributeResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVolumeStatusRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVolumeStatusResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVolumesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVolumesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpcAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpcAttributeResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpcClassicLinkRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpcClassicLinkResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpcPeeringConnectionsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpcPeeringConnectionsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpcsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpcsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpnConnectionsRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpnConnectionsResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpnGatewaysRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVpnGatewaysResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DetachClassicLinkVpcRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DetachClassicLinkVpcResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DetachInternetGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DetachNetworkInterfaceRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DetachVolumeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DetachVpnGatewayRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeviceType' => [
      'base' => NULL,
      'refs' => [
        'Image$RootDeviceType' => '<p>The type of root device used by the AMI. The AMI can use an Amazon EBS volume or an instance store volume.</p>',
        'Instance$RootDeviceType' => '<p>The root device type used by the AMI. The AMI can use an Amazon EBS volume or an instance store volume.</p>',
      ],
    ],
    'DhcpConfiguration' => [
      'base' => '<p>Describes a DHCP configuration option.</p>',
      'refs' => [
        'DhcpConfigurationList$member' => NULL,
      ],
    ],
    'DhcpConfigurationList' => [
      'base' => NULL,
      'refs' => [
        'DhcpOptions$DhcpConfigurations' => '<p>One or more DHCP options in the set.</p>',
      ],
    ],
    'DhcpOptions' => [
      'base' => '<p>Describes a set of DHCP options.</p>',
      'refs' => [
        'CreateDhcpOptionsResult$DhcpOptions' => '<p>A set of DHCP options.</p>',
        'DhcpOptionsList$member' => NULL,
      ],
    ],
    'DhcpOptionsIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeDhcpOptionsRequest$DhcpOptionsIds' => '<p>The IDs of one or more DHCP options sets.</p> <p>Default: Describes all your DHCP options sets.</p>',
      ],
    ],
    'DhcpOptionsList' => [
      'base' => NULL,
      'refs' => [
        'DescribeDhcpOptionsResult$DhcpOptions' => '<p>Information about one or more DHCP options sets.</p>',
      ],
    ],
    'DisableVgwRoutePropagationRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DisableVpcClassicLinkRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DisableVpcClassicLinkResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DisassociateAddressRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DisassociateRouteTableRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DiskImage' => [
      'base' => '<p>Describes a disk image.</p>',
      'refs' => [
        'DiskImageList$member' => NULL,
      ],
    ],
    'DiskImageDescription' => [
      'base' => NULL,
      'refs' => [
        'ImportInstanceVolumeDetailItem$Image' => '<p>The image.</p>',
        'ImportVolumeTaskDetails$Image' => '<p>The image.</p>',
      ],
    ],
    'DiskImageDetail' => [
      'base' => NULL,
      'refs' => [
        'DiskImage$Image' => NULL,
        'ImportVolumeRequest$Image' => NULL,
      ],
    ],
    'DiskImageFormat' => [
      'base' => NULL,
      'refs' => [
        'DiskImageDescription$Format' => '<p>The disk image format.</p>',
        'DiskImageDetail$Format' => '<p>The disk image format.</p>',
        'ExportToS3Task$DiskImageFormat' => '<p>The format for the exported image.</p>',
        'ExportToS3TaskSpecification$DiskImageFormat' => NULL,
      ],
    ],
    'DiskImageList' => [
      'base' => NULL,
      'refs' => [
        'ImportInstanceRequest$DiskImages' => NULL,
      ],
    ],
    'DiskImageVolumeDescription' => [
      'base' => NULL,
      'refs' => [
        'ImportInstanceVolumeDetailItem$Volume' => '<p>The volume.</p>',
        'ImportVolumeTaskDetails$Volume' => '<p>The volume.</p>',
      ],
    ],
    'DomainType' => [
      'base' => NULL,
      'refs' => [
        'Address$Domain' => '<p>Indicates whether this Elastic IP address is for use with instances in EC2-Classic (<code>standard</code>] or instances in a VPC (<code>vpc</code>].</p>',
        'AllocateAddressRequest$Domain' => '<p>Set to <code>vpc</code> to allocate the address for use with instances in a VPC.</p> <p>Default: The address is for use with instances in EC2-Classic.</p>',
        'AllocateAddressResult$Domain' => '<p>Indicates whether this Elastic IP address is for use with instances in EC2-Classic (<code>standard</code>] or instances in a VPC (<code>vpc</code>].</p>',
      ],
    ],
    'Double' => [
      'base' => NULL,
      'refs' => [
        'PriceSchedule$Price' => '<p>The fixed price for the term.</p>',
        'PriceScheduleSpecification$Price' => '<p>The fixed price for the term.</p>',
        'PricingDetail$Price' => '<p>The price per instance.</p>',
        'RecurringCharge$Amount' => '<p>The amount of the recurring charge.</p>',
        'ReservedInstanceLimitPrice$Amount' => '<p>Used for Reserved Instance Marketplace offerings. Specifies the limit price on the total order (instanceCount * price].</p>',
      ],
    ],
    'EbsBlockDevice' => [
      'base' => '<p>Describes an Amazon EBS block device.</p>',
      'refs' => [
        'BlockDeviceMapping$Ebs' => '<p>Parameters used to automatically set up Amazon EBS volumes when the instance is launched.</p>',
      ],
    ],
    'EbsInstanceBlockDevice' => [
      'base' => '<p>Describes a parameter used to set up an Amazon EBS volume in a block device mapping.</p>',
      'refs' => [
        'InstanceBlockDeviceMapping$Ebs' => '<p>Parameters used to automatically set up Amazon EBS volumes when the instance is launched.</p>',
      ],
    ],
    'EbsInstanceBlockDeviceSpecification' => [
      'base' => NULL,
      'refs' => [
        'InstanceBlockDeviceMappingSpecification$Ebs' => '<p>Parameters used to automatically set up Amazon EBS volumes when the instance is launched.</p>',
      ],
    ],
    'EnableVgwRoutePropagationRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EnableVolumeIORequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EnableVpcClassicLinkRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EnableVpcClassicLinkResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EventCode' => [
      'base' => NULL,
      'refs' => [
        'InstanceStatusEvent$Code' => '<p>The associated code of the event.</p>',
      ],
    ],
    'ExecutableByStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeImagesRequest$ExecutableUsers' => '<p>Scopes the images by users with explicit launch permissions. Specify an AWS account ID, <code>self</code> (the sender of the request], or <code>all</code> (public AMIs].</p>',
      ],
    ],
    'ExportEnvironment' => [
      'base' => NULL,
      'refs' => [
        'CreateInstanceExportTaskRequest$TargetEnvironment' => '<p>The target virtualization environment.</p>',
        'InstanceExportDetails$TargetEnvironment' => '<p>The target virtualization environment.</p>',
      ],
    ],
    'ExportTask' => [
      'base' => '<p>Describes an export task.</p>',
      'refs' => [
        'CreateInstanceExportTaskResult$ExportTask' => NULL,
        'ExportTaskList$member' => NULL,
      ],
    ],
    'ExportTaskIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeExportTasksRequest$ExportTaskIds' => '<p>One or more export task IDs.</p>',
      ],
    ],
    'ExportTaskList' => [
      'base' => NULL,
      'refs' => [
        'DescribeExportTasksResult$ExportTasks' => NULL,
      ],
    ],
    'ExportTaskState' => [
      'base' => NULL,
      'refs' => [
        'ExportTask$State' => '<p>The state of the conversion task.</p>',
      ],
    ],
    'ExportToS3Task' => [
      'base' => NULL,
      'refs' => [
        'ExportTask$ExportToS3Task' => NULL,
      ],
    ],
    'ExportToS3TaskSpecification' => [
      'base' => NULL,
      'refs' => [
        'CreateInstanceExportTaskRequest$ExportToS3Task' => NULL,
      ],
    ],
    'Filter' => [
      'base' => '<p>A filter name and value pair that is used to return a more specific list of results. Filters can be used to match a set of resources by various criteria, such as tags, attributes, or IDs.</p>',
      'refs' => [
        'FilterList$member' => NULL,
      ],
    ],
    'FilterList' => [
      'base' => NULL,
      'refs' => [
        'DescribeAddressesRequest$Filters' => '<p>One or more filters. Filter names and values are case-sensitive.</p> <ul> <li> <p><code>allocation-id</code> - [EC2-VPC] The allocation ID for the address.</p> </li> <li> <p><code>association-id</code> - [EC2-VPC] The association ID for the address.</p> </li> <li> <p><code>domain</code> - Indicates whether the address is for use in EC2-Classic (<code>standard</code>] or in a VPC (<code>vpc</code>].</p> </li> <li> <p><code>instance-id</code> - The ID of the instance the address is associated with, if any.</p> </li> <li> <p><code>network-interface-id</code> - [EC2-VPC] The ID of the network interface that the address is associated with, if any.</p> </li> <li> <p><code>network-interface-owner-id</code> - The AWS account ID of the owner.</p> </li> <li> <p><code>private-ip-address</code> - [EC2-VPC] The private IP address associated with the Elastic IP address.</p> </li> <li> <p><code>public-ip</code> - The Elastic IP address.</p> </li> </ul>',
        'DescribeAvailabilityZonesRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>message</code> - Information about the Availability Zone.</p> </li> <li> <p><code>region-name</code> - The name of the region for the Availability Zone (for example, <code>us-east-1</code>].</p> </li> <li> <p><code>state</code> - The state of the Availability Zone (<code>available</code> | <code>impaired</code> | <code>unavailable</code>].</p> </li> <li> <p><code>zone-name</code> - The name of the Availability Zone (for example, <code>us-east-1a</code>].</p> </li> </ul>',
        'DescribeBundleTasksRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>bundle-id</code> - The ID of the bundle task.</p> </li> <li> <p><code>error-code</code> - If the task failed, the error code returned.</p> </li> <li> <p><code>error-message</code> - If the task failed, the error message returned.</p> </li> <li> <p><code>instance-id</code> - The ID of the instance.</p> </li> <li> <p><code>progress</code> - The level of task completion, as a percentage (for example, 20%].</p> </li> <li> <p><code>s3-bucket</code> - The Amazon S3 bucket to store the AMI.</p> </li> <li> <p><code>s3-prefix</code> - The beginning of the AMI name.</p> </li> <li> <p><code>start-time</code> - The time the task started (for example, 2013-09-15T17:15:20.000Z].</p> </li> <li> <p><code>state</code> - The state of the task (<code>pending</code> | <code>waiting-for-shutdown</code> | <code>bundling</code> | <code>storing</code> | <code>cancelling</code> | <code>complete</code> | <code>failed</code>].</p> </li> <li> <p><code>update-time</code> - The time of the most recent update for the task.</p> </li> </ul>',
        'DescribeClassicLinkInstancesRequest$Filters' => '<p>One or more filters.</p> <ul> <li><p><code>group-id</code> - The ID of a VPC security group that\'s associated with the instance.</p></li> <li> <p><code>instance-id</code> - The ID of the instance.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>vpc-id</code> - The ID of the VPC that the instance is linked to.</p> </li> </ul>',
        'DescribeConversionTasksRequest$Filters' => NULL,
        'DescribeCustomerGatewaysRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>bgp-asn</code> - The customer gateway\'s Border Gateway Protocol (BGP] Autonomous System Number (ASN].</p> </li> <li> <p><code>customer-gateway-id</code> - The ID of the customer gateway.</p> </li> <li> <p><code>ip-address</code> - The IP address of the customer gateway\'s Internet-routable external interface.</p> </li> <li> <p><code>state</code> - The state of the customer gateway (<code>pending</code> | <code>available</code> | <code>deleting</code> | <code>deleted</code>].</p> </li> <li> <p><code>type</code> - The type of customer gateway. Currently, the only supported type is <code>ipsec.1</code>.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> </ul>',
        'DescribeDhcpOptionsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>dhcp-options-id</code> - The ID of a set of DHCP options.</p> </li> <li> <p><code>key</code> - The key for one of the options (for example, <code>domain-name</code>].</p> </li> <li> <p><code>value</code> - The value for one of the options.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> </ul>',
        'DescribeImagesRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>architecture</code> - The image architecture (<code>i386</code> | <code>x86_64</code>].</p> </li> <li> <p><code>block-device-mapping.delete-on-termination</code> - A Boolean value that indicates whether the Amazon EBS volume is deleted on instance termination.</p> </li> <li> <p><code>block-device-mapping.device-name</code> - The device name for the Amazon EBS volume (for example, <code>/dev/sdh</code>].</p> </li> <li> <p><code>block-device-mapping.snapshot-id</code> - The ID of the snapshot used for the Amazon EBS volume.</p> </li> <li> <p><code>block-device-mapping.volume-size</code> - The volume size of the Amazon EBS volume, in GiB.</p> </li> <li> <p><code>block-device-mapping.volume-type</code> - The volume type of the Amazon EBS volume (<code>gp2</code> | <code>standard</code> | <code>io1</code>].</p> </li> <li> <p><code>description</code> - The description of the image (provided during image creation].</p> </li> <li> <p><code>hypervisor</code> - The hypervisor type (<code>ovm</code> | <code>xen</code>].</p> </li> <li> <p><code>image-id</code> - The ID of the image.</p> </li> <li> <p><code>image-type</code> - The image type (<code>machine</code> | <code>kernel</code> | <code>ramdisk</code>].</p> </li> <li> <p><code>is-public</code> - A Boolean that indicates whether the image is public.</p> </li> <li> <p><code>kernel-id</code> - The kernel ID.</p> </li> <li> <p><code>manifest-location</code> - The location of the image manifest.</p> </li> <li> <p><code>name</code> - The name of the AMI (provided during image creation].</p> </li> <li> <p><code>owner-alias</code> - The AWS account alias (for example, <code>amazon</code>].</p> </li> <li> <p><code>owner-id</code> - The AWS account ID of the image owner.</p> </li> <li> <p><code>platform</code> - The platform. To only list Windows-based AMIs, use <code>windows</code>.</p> </li> <li> <p><code>product-code</code> - The product code.</p> </li> <li> <p><code>product-code.type</code> - The type of the product code (<code>devpay</code> | <code>marketplace</code>].</p> </li> <li> <p><code>ramdisk-id</code> - The RAM disk ID.</p> </li> <li> <p><code>root-device-name</code> - The name of the root device volume (for example, <code>/dev/sda1</code>].</p> </li> <li> <p><code>root-device-type</code> - The type of the root device volume (<code>ebs</code> | <code>instance-store</code>].</p> </li> <li> <p><code>state</code> - The state of the image (<code>available</code> | <code>pending</code> | <code>failed</code>].</p> </li> <li> <p><code>state-reason-code</code> - The reason code for the state change.</p> </li> <li> <p><code>state-reason-message</code> - The message for the state change.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the tag-value filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>virtualization-type</code> - The virtualization type (<code>paravirtual</code> | <code>hvm</code>].</p> </li> </ul>',
        'DescribeInstanceStatusRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>availability-zone</code> - The Availability Zone of the instance.</p> </li> <li> <p><code>event.code</code> - The code identifying the type of event (<code>instance-reboot</code> | <code>system-reboot</code> | <code>system-maintenance</code> | <code>instance-retirement</code> | <code>instance-stop</code>].</p> </li> <li> <p><code>event.description</code> - A description of the event.</p> </li> <li> <p><code>event.not-after</code> - The latest end time for the scheduled event, for example: <code>2010-09-15T17:15:20.000Z</code>.</p> </li> <li> <p><code>event.not-before</code> - The earliest start time for the scheduled event, for example: <code>2010-09-15T17:15:20.000Z</code>.</p> </li> <li> <p><code>instance-state-code</code> - A code representing the state of the instance, as a 16-bit unsigned integer. The high byte is an opaque internal value and should be ignored. The low byte is set based on the state represented. The valid values are 0 (pending], 16 (running], 32 (shutting-down], 48 (terminated], 64 (stopping], and 80 (stopped].</p> </li> <li> <p><code>instance-state-name</code> - The state of the instance (<code>pending</code> | <code>running</code> | <code>shutting-down</code> | <code>terminated</code> | <code>stopping</code> | <code>stopped</code>].</p> </li> <li> <p><code>instance-status.reachability</code> - Filters on instance status where the name is <code>reachability</code> (<code>passed</code> | <code>failed</code> | <code>initializing</code> | <code>insufficient-data</code>].</p> </li> <li> <p><code>instance-status.status</code> - The status of the instance (<code>ok</code> | <code>impaired</code> | <code>initializing</code> | <code>insufficient-data</code> | <code>not-applicable</code>].</p> </li> <li> <p><code>system-status.reachability</code> - Filters on system status where the name is <code>reachability</code> (<code>passed</code> | <code>failed</code> | <code>initializing</code> | <code>insufficient-data</code>].</p> </li> <li> <p><code>system-status.status</code> - The system status of the instance (<code>ok</code> | <code>impaired</code> | <code>initializing</code> | <code>insufficient-data</code> | <code>not-applicable</code>].</p> </li> </ul>',
        'DescribeInstancesRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>architecture</code> - The instance architecture (<code>i386</code> | <code>x86_64</code>].</p> </li> <li> <p><code>availability-zone</code> - The Availability Zone of the instance.</p> </li> <li> <p><code>block-device-mapping.attach-time</code> - The attach time for an Amazon EBS volume mapped to the instance, for example, <code>2010-09-15T17:15:20.000Z</code>.</p> </li> <li> <p><code>block-device-mapping.delete-on-termination</code> - A Boolean that indicates whether the Amazon EBS volume is deleted on instance termination.</p> </li> <li> <p><code>block-device-mapping.device-name</code> - The device name for the Amazon EBS volume (for example, <code>/dev/sdh</code>].</p> </li> <li> <p><code>block-device-mapping.status</code> - The status for the Amazon EBS volume (<code>attaching</code> | <code>attached</code> | <code>detaching</code> | <code>detached</code>].</p> </li> <li> <p><code>block-device-mapping.volume-id</code> - The volume ID of the Amazon EBS volume.</p> </li> <li> <p><code>client-token</code> - The idempotency token you provided when you launched the instance.</p> </li> <li> <p><code>dns-name</code> - The public DNS name of the instance.</p> </li> <li> <p><code>group-id</code> - The ID of the security group for the instance. EC2-Classic only.</p> </li> <li> <p><code>group-name</code> - The name of the security group for the instance. EC2-Classic only.</p> </li> <li> <p><code>hypervisor</code> - The hypervisor type of the instance (<code>ovm</code> | <code>xen</code>].</p> </li> <li> <p><code>iam-instance-profile.arn</code> - The instance profile associated with the instance. Specified as an ARN.</p> </li> <li> <p><code>image-id</code> - The ID of the image used to launch the instance.</p> </li> <li> <p><code>instance-id</code> - The ID of the instance.</p> </li> <li> <p><code>instance-lifecycle</code> - Indicates whether this is a Spot Instance (<code>spot</code>].</p> </li> <li> <p><code>instance-state-code</code> - The state of the instance, as a 16-bit unsigned integer. The high byte is an opaque internal value and should be ignored. The low byte is set based on the state represented. The valid values are: 0 (pending], 16 (running], 32 (shutting-down], 48 (terminated], 64 (stopping], and 80 (stopped].</p> </li> <li> <p><code>instance-state-name</code> - The state of the instance (<code>pending</code> | <code>running</code> | <code>shutting-down</code> | <code>terminated</code> | <code>stopping</code> | <code>stopped</code>].</p> </li> <li> <p><code>instance-type</code> - The type of instance (for example, <code>m1.small</code>].</p> </li> <li> <p><code>instance.group-id</code> - The ID of the security group for the instance. </p> </li> <li> <p><code>instance.group-name</code> - The name of the security group for the instance. </p> </li> <li> <p><code>ip-address</code> - The public IP address of the instance.</p> </li> <li> <p><code>kernel-id</code> - The kernel ID.</p> </li> <li> <p><code>key-name</code> - The name of the key pair used when the instance was launched.</p> </li> <li> <p><code>launch-index</code> - When launching multiple instances, this is the index for the instance in the launch group (for example, 0, 1, 2, and so on]. </p> </li> <li> <p><code>launch-time</code> - The time when the instance was launched.</p> </li> <li> <p><code>monitoring-state</code> - Indicates whether monitoring is enabled for the instance (<code>disabled</code> | <code>enabled</code>].</p> </li> <li> <p><code>owner-id</code> - The AWS account ID of the instance owner.</p> </li> <li> <p><code>placement-group-name</code> - The name of the placement group for the instance.</p> </li> <li> <p><code>platform</code> - The platform. Use <code>windows</code> if you have Windows instances; otherwise, leave blank.</p> </li> <li> <p><code>private-dns-name</code> - The private DNS name of the instance.</p> </li> <li> <p><code>private-ip-address</code> - The private IP address of the instance.</p> </li> <li> <p><code>product-code</code> - The product code associated with the AMI used to launch the instance.</p> </li> <li> <p><code>product-code.type</code> - The type of product code (<code>devpay</code> | <code>marketplace</code>].</p> </li> <li> <p><code>ramdisk-id</code> - The RAM disk ID.</p> </li> <li> <p><code>reason</code> - The reason for the current state of the instance (for example, shows "User Initiated [date]" when you stop or terminate the instance]. Similar to the state-reason-code filter.</p> </li> <li> <p><code>requester-id</code> - The ID of the entity that launched the instance on your behalf (for example, AWS Management Console, Auto Scaling, and so on].</p> </li> <li> <p><code>reservation-id</code> - The ID of the instance\'s reservation. A reservation ID is created any time you launch an instance. A reservation ID has a one-to-one relationship with an instance launch request, but can be associated with more than one instance if you launch multiple instances using the same launch request. For example, if you launch one instance, you\'ll get one reservation ID. If you launch ten instances using the same launch request, you\'ll also get one reservation ID.</p> </li> <li> <p><code>root-device-name</code> - The name of the root device for the instance (for example, <code>/dev/sda1</code>].</p> </li> <li> <p><code>root-device-type</code> - The type of root device that the instance uses (<code>ebs</code> | <code>instance-store</code>].</p> </li> <li> <p><code>source-dest-check</code> - Indicates whether the instance performs source/destination checking. A value of <code>true</code> means that checking is enabled, and <code>false</code> means checking is disabled. The value must be <code>false</code> for the instance to perform network address translation (NAT] in your VPC. </p> </li> <li> <p><code>spot-instance-request-id</code> - The ID of the Spot Instance request.</p> </li> <li> <p><code>state-reason-code</code> - The reason code for the state change.</p> </li> <li> <p><code>state-reason-message</code> - A message that describes the state change.</p> </li> <li> <p><code>subnet-id</code> - The ID of the subnet for the instance.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource, where <code>tag</code>:<i>key</i> is the tag\'s key. </p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>tenancy</code> - The tenancy of an instance (<code>dedicated</code> | <code>default</code>].</p> </li> <li> <p><code>virtualization-type</code> - The virtualization type of the instance (<code>paravirtual</code> | <code>hvm</code>].</p> </li> <li> <p><code>vpc-id</code> - The ID of the VPC that the instance is running in.</p> </li> <li> <p><code>network-interface.description</code> - The description of the network interface.</p> </li> <li> <p><code>network-interface.subnet-id</code> - The ID of the subnet for the network interface.</p> </li> <li> <p><code>network-interface.vpc-id</code> - The ID of the VPC for the network interface.</p> </li> <li> <p><code>network-interface.network-interface.id</code> - The ID of the network interface.</p> </li> <li> <p><code>network-interface.owner-id</code> - The ID of the owner of the network interface.</p> </li> <li> <p><code>network-interface.availability-zone</code> - The Availability Zone for the network interface.</p> </li> <li> <p><code>network-interface.requester-id</code> - The requester ID for the network interface.</p> </li> <li> <p><code>network-interface.requester-managed</code> - Indicates whether the network interface is being managed by AWS.</p> </li> <li> <p><code>network-interface.status</code> - The status of the network interface (<code>available</code>] | <code>in-use</code>].</p> </li> <li> <p><code>network-interface.mac-address</code> - The MAC address of the network interface.</p> </li> <li> <p><code>network-interface-private-dns-name</code> - The private DNS name of the network interface.</p> </li> <li> <p><code>network-interface.source-destination-check</code> - Whether the network interface performs source/destination checking. A value of <code>true</code> means checking is enabled, and <code>false</code> means checking is disabled. The value must be <code>false</code> for the network interface to perform network address translation (NAT] in your VPC.</p> </li> <li> <p><code>network-interface.group-id</code> - The ID of a security group associated with the network interface.</p> </li> <li> <p><code>network-interface.group-name</code> - The name of a security group associated with the network interface.</p> </li> <li> <p><code>network-interface.attachment.attachment-id</code> - The ID of the interface attachment.</p> </li> <li> <p><code>network-interface.attachment.instance-id</code> - The ID of the instance to which the network interface is attached.</p> </li> <li> <p><code>network-interface.attachment.instance-owner-id</code> - The owner ID of the instance to which the network interface is attached.</p> </li> <li> <p><code>network-interface.addresses.private-ip-address</code> - The private IP address associated with the network interface.</p> </li> <li> <p><code>network-interface.attachment.device-index</code> - The device index to which the network interface is attached.</p> </li> <li> <p><code>network-interface.attachment.status</code> - The status of the attachment (<code>attaching</code> | <code>attached</code> | <code>detaching</code> | <code>detached</code>].</p> </li> <li> <p><code>network-interface.attachment.attach-time</code> - The time that the network interface was attached to an instance.</p> </li> <li> <p><code>network-interface.attachment.delete-on-termination</code> - Specifies whether the attachment is deleted when an instance is terminated.</p> </li> <li> <p><code>network-interface.addresses.primary</code> - Specifies whether the IP address of the network interface is the primary private IP address.</p> </li> <li> <p><code>network-interface.addresses.association.public-ip</code> - The ID of the association of an Elastic IP address with a network interface.</p> </li> <li> <p><code>network-interface.addresses.association.ip-owner-id</code> - The owner ID of the private IP address associated with the network interface.</p> </li> <li> <p><code>association.public-ip</code> - The address of the Elastic IP address bound to the network interface.</p> </li> <li> <p><code>association.ip-owner-id</code> - The owner of the Elastic IP address associated with the network interface.</p> </li> <li> <p><code>association.allocation-id</code> - The allocation ID returned when you allocated the Elastic IP address for your network interface.</p> </li> <li> <p><code>association.association-id</code> - The association ID returned when the network interface was associated with an IP address.</p> </li> </ul>',
        'DescribeInternetGatewaysRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>attachment.state</code> - The current state of the attachment between the gateway and the VPC (<code>available</code>]. Present only if a VPC is attached.</p> </li> <li> <p><code>attachment.vpc-id</code> - The ID of an attached VPC.</p> </li> <li> <p><code>internet-gateway-id</code> - The ID of the Internet gateway.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> </ul>',
        'DescribeKeyPairsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>fingerprint</code> - The fingerprint of the key pair.</p> </li> <li> <p><code>key-name</code> - The name of the key pair.</p> </li> </ul>',
        'DescribeNetworkAclsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>association.association-id</code> - The ID of an association ID for the ACL.</p> </li> <li> <p><code>association.network-acl-id</code> - The ID of the network ACL involved in the association.</p> </li> <li> <p><code>association.subnet-id</code> - The ID of the subnet involved in the association.</p> </li> <li> <p><code>default</code> - Indicates whether the ACL is the default network ACL for the VPC.</p> </li> <li> <p><code>entry.cidr</code> - The CIDR range specified in the entry.</p> </li> <li> <p><code>entry.egress</code> - Indicates whether the entry applies to egress traffic.</p> </li> <li> <p><code>entry.icmp.code</code> - The ICMP code specified in the entry, if any.</p> </li> <li> <p><code>entry.icmp.type</code> - The ICMP type specified in the entry, if any.</p> </li> <li> <p><code>entry.port-range.from</code> - The start of the port range specified in the entry. </p> </li> <li> <p><code>entry.port-range.to</code> - The end of the port range specified in the entry. </p> </li> <li> <p><code>entry.protocol</code> - The protocol specified in the entry (<code>tcp</code> | <code>udp</code> | <code>icmp</code> or a protocol number].</p> </li> <li> <p><code>entry.rule-action</code> - Allows or denies the matching traffic (<code>allow</code> | <code>deny</code>].</p> </li> <li> <p><code>entry.rule-number</code> - The number of an entry (in other words, rule] in the ACL\'s set of entries.</p> </li> <li> <p><code>network-acl-id</code> - The ID of the network ACL.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>vpc-id</code> - The ID of the VPC for the network ACL.</p> </li> </ul>',
        'DescribeNetworkInterfacesRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>addresses.private-ip-address</code> - The private IP addresses associated with the network interface.</p> </li> <li> <p><code>addresses.primary</code> - Whether the private IP address is the primary IP address associated with the network interface. </p> </li> <li> <p><code>addresses.association.public-ip</code> - The association ID returned when the network interface was associated with the Elastic IP address.</p> </li> <li> <p><code>addresses.association.owner-id</code> - The owner ID of the addresses associated with the network interface.</p> </li> <li> <p><code>association.association-id</code> - The association ID returned when the network interface was associated with an IP address.</p> </li> <li> <p><code>association.allocation-id</code> - The allocation ID returned when you allocated the Elastic IP address for your network interface.</p> </li> <li> <p><code>association.ip-owner-id</code> - The owner of the Elastic IP address associated with the network interface.</p> </li> <li> <p><code>association.public-ip</code> - The address of the Elastic IP address bound to the network interface.</p> </li> <li> <p><code>association.public-dns-name</code> - The public DNS name for the network interface.</p> </li> <li> <p><code>attachment.attachment-id</code> - The ID of the interface attachment.</p> </li> <li> <p><code>attachment.instance-id</code> - The ID of the instance to which the network interface is attached.</p> </li> <li> <p><code>attachment.instance-owner-id</code> - The owner ID of the instance to which the network interface is attached.</p> </li> <li> <p><code>attachment.device-index</code> - The device index to which the network interface is attached.</p> </li> <li> <p><code>attachment.status</code> - The status of the attachment (<code>attaching</code> | <code>attached</code> | <code>detaching</code> | <code>detached</code>].</p> </li> <li> <p><code>attachment.attach.time</code> - The time that the network interface was attached to an instance.</p> </li> <li> <p><code>attachment.delete-on-termination</code> - Indicates whether the attachment is deleted when an instance is terminated.</p> </li> <li> <p><code>availability-zone</code> - The Availability Zone of the network interface.</p> </li> <li> <p><code>description</code> - The description of the network interface.</p> </li> <li> <p><code>group-id</code> - The ID of a security group associated with the network interface.</p> </li> <li> <p><code>group-name</code> - The name of a security group associated with the network interface.</p> </li> <li> <p><code>mac-address</code> - The MAC address of the network interface.</p> </li> <li> <p><code>network-interface-id</code> - The ID of the network interface.</p> </li> <li> <p><code>owner-id</code> - The AWS account ID of the network interface owner.</p> </li> <li> <p><code>private-ip-address</code> - The private IP address or addresses of the network interface.</p> </li> <li> <p><code>private-dns-name</code> - The private DNS name of the network interface.</p> </li> <li> <p><code>requester-id</code> - The ID of the entity that launched the instance on your behalf (for example, AWS Management Console, Auto Scaling, and so on].</p> </li> <li> <p><code>requester-managed</code> - Indicates whether the network interface is being managed by an AWS service (for example, AWS Management Console, Auto Scaling, and so on].</p> </li> <li> <p><code>source-desk-check</code> - Indicates whether the network interface performs source/destination checking. A value of <code>true</code> means checking is enabled, and <code>false</code> means checking is disabled. The value must be <code>false</code> for the network interface to perform Network Address Translation (NAT] in your VPC. </p> </li> <li> <p><code>status</code> - The status of the network interface. If the network interface is not attached to an instance, the status is <code>available</code>; if a network interface is attached to an instance the status is <code>in-use</code>.</p> </li> <li> <p><code>subnet-id</code> - The ID of the subnet for the network interface.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>vpc-id</code> - The ID of the VPC for the network interface.</p> </li> </ul>',
        'DescribePlacementGroupsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>group-name</code> - The name of the placement group.</p> </li> <li> <p><code>state</code> - The state of the placement group (<code>pending</code> | <code>available</code> | <code>deleting</code> | <code>deleted</code>].</p> </li> <li> <p><code>strategy</code> - The strategy of the placement group (<code>cluster</code>].</p> </li> </ul>',
        'DescribeRegionsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>endpoint</code> - The endpoint of the region (for example, <code>ec2.us-east-1.amazonaws.com</code>].</p> </li> <li> <p><code>region-name</code> - The name of the region (for example, <code>us-east-1</code>].</p> </li> </ul>',
        'DescribeReservedInstancesListingsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>reserved-instances-id</code> - The ID of the Reserved Instances.</p> </li> <li> <p><code>reserved-instances-listing-id</code> - The ID of the Reserved Instances listing.</p> </li> <li> <p><code>status</code> - The status of the Reserved Instance listing (<code>pending</code> | <code>active</code> | <code>cancelled</code> | <code>closed</code>].</p> </li> <li> <p><code>status-message</code> - The reason for the status.</p> </li> </ul>',
        'DescribeReservedInstancesModificationsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>client-token</code> - The idempotency token for the modification request.</p> </li> <li> <p><code>create-date</code> - The time when the modification request was created.</p> </li> <li> <p><code>effective-date</code> - The time when the modification becomes effective.</p> </li> <li> <p><code>modification-result.reserved-instances-id</code> - The ID for the Reserved Instances created as part of the modification request. This ID is only available when the status of the modification is <code>fulfilled</code>.</p> </li> <li> <p><code>modification-result.target-configuration.availability-zone</code> - The Availability Zone for the new Reserved Instances.</p> </li> <li> <p><code>modification-result.target-configuration.instance-count </code> - The number of new Reserved Instances.</p> </li> <li> <p><code>modification-result.target-configuration.instance-type</code> - The instance type of the new Reserved Instances.</p> </li> <li> <p><code>modification-result.target-configuration.platform</code> - The network platform of the new Reserved Instances (<code>EC2-Classic</code> | <code>EC2-VPC</code>].</p> </li> <li> <p><code>reserved-instances-id</code> - The ID of the Reserved Instances modified.</p> </li> <li> <p><code>reserved-instances-modification-id</code> - The ID of the modification request.</p> </li> <li> <p><code>status</code> - The status of the Reserved Instances modification request (<code>processing</code> | <code>fulfilled</code> | <code>failed</code>].</p> </li> <li> <p><code>status-message</code> - The reason for the status.</p> </li> <li> <p><code>update-date</code> - The time when the modification request was last updated.</p> </li> </ul>',
        'DescribeReservedInstancesOfferingsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>availability-zone</code> - The Availability Zone where the Reserved Instance can be used.</p> </li> <li> <p><code>duration</code> - The duration of the Reserved Instance (for example, one year or three years], in seconds (<code>31536000</code> | <code>94608000</code>].</p> </li> <li> <p><code>fixed-price</code> - The purchase price of the Reserved Instance (for example, 9800.0].</p> </li> <li> <p><code>instance-type</code> - The instance type on which the Reserved Instance can be used.</p> </li> <li> <p><code>marketplace</code> - Set to <code>true</code> to show only Reserved Instance Marketplace offerings. When this filter is not used, which is the default behavior, all offerings from AWS and Reserved Instance Marketplace are listed.</p> </li> <li> <p><code>product-description</code> - The description of the Reserved Instance (<code>Linux/UNIX</code> | <code>Linux/UNIX (Amazon VPC]</code> | <code>Windows</code> | <code>Windows (Amazon VPC]</code>].</p> </li> <li> <p><code>reserved-instances-offering-id</code> - The Reserved Instances offering ID.</p> </li> <li> <p><code>usage-price</code> - The usage price of the Reserved Instance, per hour (for example, 0.84].</p> </li> </ul>',
        'DescribeReservedInstancesRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>availability-zone</code> - The Availability Zone where the Reserved Instance can be used.</p> </li> <li> <p><code>duration</code> - The duration of the Reserved Instance (one year or three years], in seconds (<code>31536000</code> | <code>94608000</code>].</p> </li> <li> <p><code>end</code> - The time when the Reserved Instance expires (for example, 2014-08-07T11:54:42.000Z].</p> </li> <li> <p><code>fixed-price</code> - The purchase price of the Reserved Instance (for example, 9800.0].</p> </li> <li> <p><code>instance-type</code> - The instance type on which the Reserved Instance can be used.</p> </li> <li> <p><code>product-description</code> - The product description of the Reserved Instance (<code>Linux/UNIX</code> | <code>Linux/UNIX (Amazon VPC]</code> | <code>Windows</code> | <code>Windows (Amazon VPC]</code>].</p> </li> <li> <p><code>reserved-instances-id</code> - The ID of the Reserved Instance.</p> </li> <li> <p><code>start</code> - The time at which the Reserved Instance purchase request was placed (for example, 2014-08-07T11:54:42.000Z].</p> </li> <li> <p><code>state</code> - The state of the Reserved Instance (<code>pending-payment</code> | <code>active</code> | <code>payment-failed</code> | <code>retired</code>].</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>usage-price</code> - The usage price of the Reserved Instance, per hour (for example, 0.84].</p> </li> </ul>',
        'DescribeRouteTablesRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>association.route-table-association-id</code> - The ID of an association ID for the route table.</p> </li> <li> <p><code>association.route-table-id</code> - The ID of the route table involved in the association.</p> </li> <li> <p><code>association.subnet-id</code> - The ID of the subnet involved in the association.</p> </li> <li> <p><code>association.main</code> - Indicates whether the route table is the main route table for the VPC.</p> </li> <li> <p><code>route-table-id</code> - The ID of the route table.</p> </li> <li> <p><code>route.destination-cidr-block</code> - The CIDR range specified in a route in the table.</p> </li> <li> <p><code>route.gateway-id</code> - The ID of a gateway specified in a route in the table.</p> </li> <li> <p><code>route.instance-id</code> - The ID of an instance specified in a route in the table.</p> </li> <li> <p><code>route.origin</code> - Describes how the route was created. <code>CreateRouteTable</code> indicates that the route was automatically created when the route table was created; <code>CreateRoute</code> indicates that the route was manually added to the route table; <code>EnableVgwRoutePropagation</code> indicates that the route was propagated by route propagation.</p> </li> <li> <p><code>route.state</code> - The state of a route in the route table (<code>active</code> | <code>blackhole</code>]. The blackhole state indicates that the route\'s target isn\'t available (for example, the specified gateway isn\'t attached to the VPC, the specified NAT instance has been terminated, and so on].</p> </li> <li> <p><code>route.vpc-peering-connection-id</code> - The ID of a VPC peering connection specified in a route in the table.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>vpc-id</code> - The ID of the VPC for the route table.</p> </li> </ul>',
        'DescribeSecurityGroupsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>description</code> - The description of the security group.</p> </li> <li> <p><code>group-id</code> - The ID of the security group.</p> </li> <li> <p><code>group-name</code> - The name of the security group.</p> </li> <li> <p><code>ip-permission.cidr</code> - A CIDR range that has been granted permission.</p> </li> <li> <p><code>ip-permission.from-port</code> - The start of port range for the TCP and UDP protocols, or an ICMP type number.</p> </li> <li> <p><code>ip-permission.group-id</code> - The ID of a security group that has been granted permission.</p> </li> <li> <p><code>ip-permission.group-name</code> - The name of a security group that has been granted permission.</p> </li> <li> <p><code>ip-permission.protocol</code> - The IP protocol for the permission (<code>tcp</code> | <code>udp</code> | <code>icmp</code> or a protocol number].</p> </li> <li> <p><code>ip-permission.to-port</code> - The end of port range for the TCP and UDP protocols, or an ICMP code.</p> </li> <li> <p><code>ip-permission.user-id</code> - The ID of an AWS account that has been granted permission.</p> </li> <li> <p><code>owner-id</code> - The AWS account ID of the owner of the security group.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the security group.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the security group.</p> </li> <li> <p><code>vpc-id</code> - The ID of the VPC specified when the security group was created.</p> </li> </ul>',
        'DescribeSnapshotsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>description</code> - A description of the snapshot.</p> </li> <li> <p><code>owner-alias</code> - The AWS account alias (for example, <code>amazon</code>] that owns the snapshot.</p> </li> <li> <p><code>owner-id</code> - The ID of the AWS account that owns the snapshot.</p> </li> <li> <p><code>progress</code> - The progress of the snapshot, as a percentage (for example, 80%].</p> </li> <li> <p><code>snapshot-id</code> - The snapshot ID.</p> </li> <li> <p><code>start-time</code> - The time stamp when the snapshot was initiated.</p> </li> <li> <p><code>status</code> - The status of the snapshot (<code>pending</code> | <code>completed</code> | <code>error</code>].</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>volume-id</code> - The ID of the volume the snapshot is for.</p> </li> <li> <p><code>volume-size</code> - The size of the volume, in GiB.</p> </li> </ul>',
        'DescribeSpotInstanceRequestsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>availability-zone-group</code> - The Availability Zone group.</p> </li> <li> <p><code>create-time</code> - The time stamp when the Spot Instance request was created.</p> </li> <li> <p><code>fault-code</code> - The fault code related to the request.</p> </li> <li> <p><code>fault-message</code> - The fault message related to the request.</p> </li> <li> <p><code>instance-id</code> - The ID of the instance that fulfilled the request.</p> </li> <li> <p><code>launch-group</code> - The Spot Instance launch group.</p> </li> <li> <p><code>launch.block-device-mapping.delete-on-termination</code> - Indicates whether the Amazon EBS volume is deleted on instance termination.</p> </li> <li> <p><code>launch.block-device-mapping.device-name</code> - The device name for the Amazon EBS volume (for example, <code>/dev/sdh</code>].</p> </li> <li> <p><code>launch.block-device-mapping.snapshot-id</code> - The ID of the snapshot used for the Amazon EBS volume.</p> </li> <li> <p><code>launch.block-device-mapping.volume-size</code> - The size of the Amazon EBS volume, in GiB.</p> </li> <li> <p><code>launch.block-device-mapping.volume-type</code> - The type of the Amazon EBS volume (<code>gp2</code> | <code>standard</code> | <code>io1</code>].</p> </li> <li> <p><code>launch.group-id</code> - The security group for the instance.</p> </li> <li> <p><code>launch.image-id</code> - The ID of the AMI.</p> </li> <li> <p><code>launch.instance-type</code> - The type of instance (for example, <code>m1.small</code>].</p> </li> <li> <p><code>launch.kernel-id</code> - The kernel ID.</p> </li> <li> <p><code>launch.key-name</code> - The name of the key pair the instance launched with.</p> </li> <li> <p><code>launch.monitoring-enabled</code> - Whether monitoring is enabled for the Spot Instance.</p> </li> <li> <p><code>launch.ramdisk-id</code> - The RAM disk ID.</p> </li> <li> <p><code>network-interface.network-interface-id</code> - The ID of the network interface.</p> </li> <li> <p><code>network-interface.device-index</code> - The index of the device for the network interface attachment on the instance.</p> </li> <li> <p><code>network-interface.subnet-id</code> - The ID of the subnet for the instance.</p> </li> <li> <p><code>network-interface.description</code> - A description of the network interface.</p> </li> <li> <p><code>network-interface.private-ip-address</code> - The primary private IP address of the network interface.</p> </li> <li> <p><code>network-interface.delete-on-termination</code> - Indicates whether the network interface is deleted when the instance is terminated.</p> </li> <li> <p><code>network-interface.group-id</code> - The ID of the security group associated with the network interface.</p> </li> <li> <p><code>network-interface.group-name</code> - The name of the security group associated with the network interface.</p> </li> <li> <p><code>network-interface.addresses.primary</code> - Indicates whether the IP address is the primary private IP address.</p> </li> <li> <p><code>product-description</code> - The product description associated with the instance (<code>Linux/UNIX</code> | <code>Windows</code>].</p> </li> <li> <p><code>spot-instance-request-id</code> - The Spot Instance request ID.</p> </li> <li> <p><code>spot-price</code> - The maximum hourly price for any Spot Instance launched to fulfill the request.</p> </li> <li> <p><code>state</code> - The state of the Spot Instance request (<code>open</code> | <code>active</code> | <code>closed</code> | <code>cancelled</code> | <code>failed</code>]. Spot bid status information can help you track your Amazon EC2 Spot Instance requests. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-bid-status.html">Spot Bid Status</a> in the Amazon Elastic Compute Cloud User Guide for Linux.</p> </li> <li> <p><code>status-code</code> - The short code describing the most recent evaluation of your Spot Instance request.</p> </li> <li> <p><code>status-message</code> - The message explaining the status of the Spot Instance request.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>type</code> - The type of Spot Instance request (<code>one-time</code> | <code>persistent</code>].</p> </li> <li> <p><code>launched-availability-zone</code> - The Availability Zone in which the bid is launched.</p> </li> <li> <p><code>valid-from</code> - The start date of the request.</p> </li> <li> <p><code>valid-until</code> - The end date of the request.</p> </li> </ul>',
        'DescribeSpotPriceHistoryRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>availability-zone</code> - The Availability Zone for which prices should be returned.</p> </li> <li> <p><code>instance-type</code> - The type of instance (for example, <code>m1.small</code>].</p> </li> <li> <p><code>product-description</code> - The product description for the Spot Price (<code>Linux/UNIX</code> | <code>SUSE Linux</code> | <code>Windows</code> | <code>Linux/UNIX (Amazon VPC]</code> | <code>SUSE Linux (Amazon VPC]</code> | <code>Windows (Amazon VPC]</code>].</p> </li> <li> <p><code>spot-price</code> - The Spot Price. The value must match exactly (or use wildcards; greater than or less than comparison is not supported].</p> </li> <li> <p><code>timestamp</code> - The timestamp of the Spot Price history (for example, 2010-08-16T05:06:11.000Z]. You can use wildcards (* and ?]. Greater than or less than comparison is not supported.</p> </li> </ul>',
        'DescribeSubnetsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>availabilityZone</code> - The Availability Zone for the subnet. You can also use <code>availability-zone</code> as the filter name.</p> </li> <li> <p><code>available-ip-address-count</code> - The number of IP addresses in the subnet that are available.</p> </li> <li> <p><code>cidrBlock</code> - The CIDR block of the subnet. The CIDR block you specify must exactly match the subnet\'s CIDR block for information to be returned for the subnet. You can also use <code>cidr</code> or <code>cidr-block</code> as the filter names.</p> </li> <li> <p><code>defaultForAz</code> - Indicates whether this is the default subnet for the Availability Zone. You can also use <code>default-for-az</code> as the filter name.</p> </li> <li> <p><code>state</code> - The state of the subnet (<code>pending</code> | <code>available</code>].</p> </li> <li> <p><code>subnet-id</code> - The ID of the subnet.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>vpc-id</code> - The ID of the VPC for the subnet.</p> </li> </ul>',
        'DescribeTagsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>key</code> - The tag key.</p> </li> <li> <p><code>resource-id</code> - The resource ID.</p> </li> <li> <p><code>resource-type</code> - The resource type (<code>customer-gateway</code> | <code>dhcp-options</code> | <code>image</code> | <code>instance</code> | <code>internet-gateway</code> | <code>network-acl</code> | <code>network-interface</code> | <code>reserved-instances</code> | <code>route-table</code> | <code>security-group</code> | <code>snapshot</code> | <code>spot-instances-request</code> | <code>subnet</code> | <code>volume</code> | <code>vpc</code> | <code>vpn-connection</code> | <code>vpn-gateway</code>].</p> </li> <li> <p><code>value</code> - The tag value.</p> </li> </ul>',
        'DescribeVolumeStatusRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>action.code</code> - The action code for the event (for example, <code>enable-volume-io</code>].</p> </li> <li> <p><code>action.description</code> - A description of the action.</p> </li> <li> <p><code>action.event-id</code> - The event ID associated with the action.</p> </li> <li> <p><code>availability-zone</code> - The Availability Zone of the instance.</p> </li> <li> <p><code>event.description</code> - A description of the event.</p> </li> <li> <p><code>event.event-id</code> - The event ID.</p> </li> <li> <p><code>event.event-type</code> - The event type (for <code>io-enabled</code>: <code>passed</code> | <code>failed</code>; for <code>io-performance</code>: <code>io-performance:degraded</code> | <code>io-performance:severely-degraded</code> | <code>io-performance:stalled</code>].</p> </li> <li> <p><code>event.not-after</code> - The latest end time for the event.</p> </li> <li> <p><code>event.not-before</code> - The earliest start time for the event.</p> </li> <li> <p><code>volume-status.details-name</code> - The cause for <code>volume-status.status</code> (<code>io-enabled</code> | <code>io-performance</code>].</p> </li> <li> <p><code>volume-status.details-status</code> - The status of <code>volume-status.details-name</code> (for <code>io-enabled</code>: <code>passed</code> | <code>failed</code>; for <code>io-performance</code>: <code>normal</code> | <code>degraded</code> | <code>severely-degraded</code> | <code>stalled</code>].</p> </li> <li> <p><code>volume-status.status</code> - The status of the volume (<code>ok</code> | <code>impaired</code> | <code>warning</code> | <code>insufficient-data</code>].</p> </li> </ul>',
        'DescribeVolumesRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>attachment.attach-time</code> - The time stamp when the attachment initiated.</p> </li> <li> <p><code>attachment.delete-on-termination</code> - Whether the volume is deleted on instance termination.</p> </li> <li> <p><code>attachment.device</code> - The device name that is exposed to the instance (for example, <code>/dev/sda1</code>].</p> </li> <li> <p><code>attachment.instance-id</code> - The ID of the instance the volume is attached to.</p> </li> <li> <p><code>attachment.status</code> - The attachment state (<code>attaching</code> | <code>attached</code> | <code>detaching</code> | <code>detached</code>].</p> </li> <li> <p><code>availability-zone</code> - The Availability Zone in which the volume was created.</p> </li> <li> <p><code>create-time</code> - The time stamp when the volume was created.</p> </li> <li> <p><code>encrypted</code> - The encryption status of the volume.</p> </li> <li> <p><code>size</code> - The size of the volume, in GiB.</p> </li> <li> <p><code>snapshot-id</code> - The snapshot from which the volume was created.</p> </li> <li> <p><code>status</code> - The status of the volume (<code>creating</code> | <code>available</code> | <code>in-use</code> | <code>deleting</code> | <code>deleted</code> | <code>error</code>].</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>volume-id</code> - The volume ID.</p> </li> <li> <p><code>volume-type</code> - The Amazon EBS volume type. This can be <code>gp2</code> for General Purpose (SSD] volumes, <code>io1</code> for Provisioned IOPS (SSD] volumes, or <code>standard</code> for Magnetic volumes.</p> </li> </ul>',
        'DescribeVpcClassicLinkRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>is-classic-link-enabled</code> - Whether the VPC is enabled for ClassicLink (<code>true</code> | <code>false</code>].</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> </ul>',
        'DescribeVpcPeeringConnectionsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>accepter-vpc-info.cidr-block</code> - The CIDR block of the peer VPC.</p> </li> <li> <p><code>accepter-vpc-info.owner-id</code> - The AWS account ID of the owner of the peer VPC.</p> </li> <li> <p><code>accepter-vpc-info.vpc-id</code> - The ID of the peer VPC.</p> </li> <li> <p><code>expiration-time</code> - The expiration date and time for the VPC peering connection.</p> </li> <li> <p><code>requester-vpc-info.cidr-block</code> - The CIDR block of the requester\'s VPC.</p> </li> <li> <p><code>requester-vpc-info.owner-id</code> - The AWS account ID of the owner of the requester VPC.</p> </li> <li> <p><code>requester-vpc-info.vpc-id</code> - The ID of the requester VPC.</p> </li> <li> <p><code>status-code</code> - The status of the VPC peering connection (<code>pending-acceptance</code> | <code>failed</code> | <code>expired</code> | <code>provisioning</code> | <code>active</code> | <code>deleted</code> | <code>rejected</code>].</p> </li> <li> <p><code>status-message</code> - A message that provides more information about the status of the VPC peering connection, if applicable.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>vpc-peering-connection-id</code> - The ID of the VPC peering connection.</p> </li> </ul>',
        'DescribeVpcsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>cidr</code> - The CIDR block of the VPC. The CIDR block you specify must exactly match the VPC\'s CIDR block for information to be returned for the VPC. Must contain the slash followed by one or two digits (for example, <code>/28</code>].</p> </li> <li> <p><code>dhcp-options-id</code> - The ID of a set of DHCP options.</p> </li> <li> <p><code>isDefault</code> - Indicates whether the VPC is the default VPC.</p> </li> <li> <p><code>state</code> - The state of the VPC (<code>pending</code> | <code>available</code>].</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>vpc-id</code> - The ID of the VPC.</p> </li> </ul>',
        'DescribeVpnConnectionsRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>customer-gateway-configuration</code> - The configuration information for the customer gateway.</p> </li> <li> <p><code>customer-gateway-id</code> - The ID of a customer gateway associated with the VPN connection.</p> </li> <li> <p><code>state</code> - The state of the VPN connection (<code>pending</code> | <code>available</code> | <code>deleting</code> | <code>deleted</code>].</p> </li> <li> <p><code>option.static-routes-only</code> - Indicates whether the connection has static routes only. Used for devices that do not support Border Gateway Protocol (BGP].</p> </li> <li> <p><code>route.destination-cidr-block</code> - The destination CIDR block. This corresponds to the subnet used in a customer data center.</p> </li> <li> <p><code>bgp-asn</code> - The BGP Autonomous System Number (ASN] associated with a BGP device.</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>type</code> - The type of VPN connection. Currently the only supported type is <code>ipsec.1</code>.</p> </li> <li> <p><code>vpn-connection-id</code> - The ID of the VPN connection.</p> </li> <li> <p><code>vpn-gateway-id</code> - The ID of a virtual private gateway associated with the VPN connection.</p> </li> </ul>',
        'DescribeVpnGatewaysRequest$Filters' => '<p>One or more filters.</p> <ul> <li> <p><code>attachment.state</code> - The current state of the attachment between the gateway and the VPC (<code>attaching</code> | <code>attached</code> | <code>detaching</code> | <code>detached</code>].</p> </li> <li> <p><code>attachment.vpc-id</code> - The ID of an attached VPC.</p> </li> <li> <p><code>availability-zone</code> - The Availability Zone for the virtual private gateway.</p> </li> <li> <p><code>state</code> - The state of the virtual private gateway (<code>pending</code> | <code>available</code> | <code>deleting</code> | <code>deleted</code>].</p> </li> <li> <p><code>tag</code>:<i>key</i>=<i>value</i> - The key/value combination of a tag assigned to the resource.</p> </li> <li> <p><code>tag-key</code> - The key of a tag assigned to the resource. This filter is independent of the <code>tag-value</code> filter. For example, if you use both the filter "tag-key=Purpose" and the filter "tag-value=X", you get any resources assigned both the tag key Purpose (regardless of what the tag\'s value is], and the tag value X (regardless of what the tag\'s key is]. If you want to list only resources where Purpose is X, see the <code>tag</code>:<i>key</i>=<i>value</i> filter.</p> </li> <li> <p><code>tag-value</code> - The value of a tag assigned to the resource. This filter is independent of the <code>tag-key</code> filter.</p> </li> <li> <p><code>type</code> - The type of virtual private gateway. Currently the only supported type is <code>ipsec.1</code>.</p> </li> <li> <p><code>vpn-gateway-id</code> - The ID of the virtual private gateway.</p> </li> </ul>',
      ],
    ],
    'Float' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstances$UsagePrice' => '<p>The usage price of the Reserved Instance, per hour.</p>',
        'ReservedInstances$FixedPrice' => '<p>The purchase price of the Reserved Instance.</p>',
        'ReservedInstancesOffering$UsagePrice' => '<p>The usage price of the Reserved Instance, per hour.</p>',
        'ReservedInstancesOffering$FixedPrice' => '<p>The purchase price of the Reserved Instance.</p>',
      ],
    ],
    'GatewayType' => [
      'base' => NULL,
      'refs' => [
        'CreateCustomerGatewayRequest$Type' => '<p>The type of VPN connection that this customer gateway supports (<code>ipsec.1</code>].</p>',
        'CreateVpnGatewayRequest$Type' => '<p>The type of VPN connection this virtual private gateway supports.</p>',
        'VpnConnection$Type' => '<p>The type of VPN connection.</p>',
        'VpnGateway$Type' => '<p>The type of VPN connection the virtual private gateway supports.</p>',
      ],
    ],
    'GetConsoleOutputRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetConsoleOutputResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetPasswordDataRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetPasswordDataResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GroupIdStringList' => [
      'base' => NULL,
      'refs' => [
        'AttachClassicLinkVpcRequest$Groups' => '<p>The ID of one or more of the VPC\'s security groups. You cannot specify security groups from a different VPC.</p>',
        'DescribeSecurityGroupsRequest$GroupIds' => '<p>One or more security group IDs. Required for nondefault VPCs.</p> <p>Default: Describes all your security groups.</p>',
        'ModifyInstanceAttributeRequest$Groups' => '<p>[EC2-VPC] Changes the security groups of the instance. You must specify at least one security group, even if it\'s just the default security group for the VPC. You must specify the security group ID, not the security group name.</p> <p>For example, if you want the instance to be in sg-1a1a1a1a and sg-9b9b9b9b, specify <code>GroupId.1=sg-1a1a1a1a</code> and <code>GroupId.2=sg-9b9b9b9b</code>.</p>',
      ],
    ],
    'GroupIdentifier' => [
      'base' => '<p>Describes a security group.</p>',
      'refs' => [
        'GroupIdentifierList$member' => NULL,
      ],
    ],
    'GroupIdentifierList' => [
      'base' => NULL,
      'refs' => [
        'ClassicLinkInstance$Groups' => '<p>A list of security groups.</p>',
        'DescribeNetworkInterfaceAttributeResult$Groups' => '<p>The security groups associated with the network interface.</p>',
        'Instance$SecurityGroups' => '<p>One or more security groups for the instance.</p>',
        'InstanceAttribute$Groups' => '<p>The security groups associated with the instance.</p>',
        'InstanceNetworkInterface$Groups' => '<p>One or more security groups.</p>',
        'LaunchSpecification$SecurityGroups' => '<p>One or more security groups. To request an instance in a nondefault VPC, you must specify the ID of the security group. To request an instance in EC2-Classic or a default VPC, you can specify the name or the ID of the security group.</p>',
        'NetworkInterface$Groups' => '<p>Any security groups for the network interface.</p>',
        'Reservation$Groups' => '<p>One or more security groups.</p>',
      ],
    ],
    'GroupNameStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSecurityGroupsRequest$GroupNames' => '<p>[EC2-Classic, default VPC] One or more security group names. You can specify either the security group name or the security group ID.</p> <p>Default: Describes all your security groups.</p>',
        'ModifySnapshotAttributeRequest$GroupNames' => '<p>The group to modify for the snapshot.</p>',
      ],
    ],
    'HypervisorType' => [
      'base' => NULL,
      'refs' => [
        'Image$Hypervisor' => '<p>The hypervisor type of the image.</p>',
        'Instance$Hypervisor' => '<p>The hypervisor type of the instance.</p>',
      ],
    ],
    'IamInstanceProfile' => [
      'base' => '<p>Describes an IAM instance profile.</p>',
      'refs' => [
        'Instance$IamInstanceProfile' => '<p>The IAM instance profile associated with the instance.</p>',
      ],
    ],
    'IamInstanceProfileSpecification' => [
      'base' => '<p>Describes an IAM instance profile.</p>',
      'refs' => [
        'LaunchSpecification$IamInstanceProfile' => '<p>The IAM instance profile.</p>',
        'RunInstancesRequest$IamInstanceProfile' => '<p>The IAM instance profile.</p>',
        'RequestSpotLaunchSpecification$IamInstanceProfile' => '<p>The IAM instance profile.</p>',
      ],
    ],
    'IcmpTypeCode' => [
      'base' => '<p>Describes the ICMP type and code.</p>',
      'refs' => [
        'CreateNetworkAclEntryRequest$IcmpTypeCode' => '<p>ICMP protocol: The ICMP type and code. Required if specifying ICMP for the protocol.</p>',
        'NetworkAclEntry$IcmpTypeCode' => '<p>ICMP protocol: The ICMP type and code.</p>',
        'ReplaceNetworkAclEntryRequest$IcmpTypeCode' => '<p>ICMP protocol: The ICMP type and code. Required if specifying 1 (ICMP] for the protocol.</p>',
      ],
    ],
    'Image' => [
      'base' => '<p>Describes an image.</p>',
      'refs' => [
        'ImageList$member' => NULL,
      ],
    ],
    'ImageAttribute' => [
      'base' => '<p>Describes an image attribute.</p>',
      'refs' => [],
    ],
    'ImageAttributeName' => [
      'base' => NULL,
      'refs' => [
        'DescribeImageAttributeRequest$Attribute' => '<p>The AMI attribute.</p>',
      ],
    ],
    'ImageIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeImagesRequest$ImageIds' => '<p>One or more image IDs.</p> <p>Default: Describes all images available to you.</p>',
      ],
    ],
    'ImageList' => [
      'base' => NULL,
      'refs' => [
        'DescribeImagesResult$Images' => '<p>Information about one or more images.</p>',
      ],
    ],
    'ImageState' => [
      'base' => NULL,
      'refs' => [
        'Image$State' => '<p>The current state of the AMI. If the state is <code>available</code>, the image is successfully registered and can be used to launch an instance.</p>',
      ],
    ],
    'ImageTypeValues' => [
      'base' => NULL,
      'refs' => [
        'Image$ImageType' => '<p>The type of image.</p>',
      ],
    ],
    'ImportInstanceLaunchSpecification' => [
      'base' => NULL,
      'refs' => [
        'ImportInstanceRequest$LaunchSpecification' => '<p></p>',
      ],
    ],
    'ImportInstanceRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ImportInstanceResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ImportInstanceTaskDetails' => [
      'base' => NULL,
      'refs' => [
        'ConversionTask$ImportInstance' => '<p>If the task is for importing an instance, this contains information about the import instance task.</p>',
      ],
    ],
    'ImportInstanceVolumeDetailItem' => [
      'base' => '<p>Describes an import volume task.</p>',
      'refs' => [
        'ImportInstanceVolumeDetailSet$member' => NULL,
      ],
    ],
    'ImportInstanceVolumeDetailSet' => [
      'base' => NULL,
      'refs' => [
        'ImportInstanceTaskDetails$Volumes' => NULL,
      ],
    ],
    'ImportKeyPairRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ImportKeyPairResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ImportVolumeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ImportVolumeResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ImportVolumeTaskDetails' => [
      'base' => '<p>Describes an import volume task.</p>',
      'refs' => [
        'ConversionTask$ImportVolume' => '<p>If the task is for importing a volume, this contains information about the import volume task.</p>',
      ],
    ],
    'Instance' => [
      'base' => '<p>Describes an instance.</p>',
      'refs' => [
        'InstanceList$member' => NULL,
      ],
    ],
    'InstanceAttribute' => [
      'base' => '<p>Describes an instance attribute.</p>',
      'refs' => [],
    ],
    'InstanceAttributeName' => [
      'base' => NULL,
      'refs' => [
        'DescribeInstanceAttributeRequest$Attribute' => '<p>The instance attribute.</p>',
        'ModifyInstanceAttributeRequest$Attribute' => '<p>The name of the attribute.</p>',
        'ResetInstanceAttributeRequest$Attribute' => '<p>The attribute to reset.</p>',
      ],
    ],
    'InstanceBlockDeviceMapping' => [
      'base' => '<p>Describes a block device mapping.</p>',
      'refs' => [
        'InstanceBlockDeviceMappingList$member' => NULL,
      ],
    ],
    'InstanceBlockDeviceMappingList' => [
      'base' => NULL,
      'refs' => [
        'Instance$BlockDeviceMappings' => '<p>Any block device mapping entries for the instance.</p>',
        'InstanceAttribute$BlockDeviceMappings' => '<p>The block device mapping of the instance.</p>',
      ],
    ],
    'InstanceBlockDeviceMappingSpecification' => [
      'base' => '<p>Describes a block device mapping entry.</p>',
      'refs' => [
        'InstanceBlockDeviceMappingSpecificationList$member' => NULL,
      ],
    ],
    'InstanceBlockDeviceMappingSpecificationList' => [
      'base' => NULL,
      'refs' => [
        'ModifyInstanceAttributeRequest$BlockDeviceMappings' => '<p>Modifies the <code>DeleteOnTermination</code> attribute for volumes that are currently attached. The volume must be owned by the caller. If no value is specified for <code>DeleteOnTermination</code>, the default is <code>true</code> and the volume is deleted when the instance is terminated.</p> <p>To add instance store volumes to an Amazon EBS-backed instance, you must add them when you launch the instance. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/block-device-mapping-concepts.html#Using_OverridingAMIBDM">Updating the Block Device Mapping when Launching an Instance</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
      ],
    ],
    'InstanceCount' => [
      'base' => '<p>Describes a Reserved Instance listing state.</p>',
      'refs' => [
        'InstanceCountList$member' => NULL,
      ],
    ],
    'InstanceCountList' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstancesListing$InstanceCounts' => '<p>The number of instances in this state.</p>',
      ],
    ],
    'InstanceExportDetails' => [
      'base' => '<p>Describes an instance export task.</p>',
      'refs' => [
        'ExportTask$InstanceExportDetails' => '<p>The instance being exported.</p>',
      ],
    ],
    'InstanceIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeClassicLinkInstancesRequest$InstanceIds' => '<p>One or more instance IDs. Must be instances linked to a VPC through ClassicLink.</p>',
        'DescribeInstanceStatusRequest$InstanceIds' => '<p>One or more instance IDs.</p> <p>Default: Describes all your instances.</p> <p>Constraints: Maximum 100 explicitly specified instance IDs.</p>',
        'DescribeInstancesRequest$InstanceIds' => '<p>One or more instance IDs.</p> <p>Default: Describes all your instances.</p>',
        'MonitorInstancesRequest$InstanceIds' => '<p>One or more instance IDs.</p>',
        'RebootInstancesRequest$InstanceIds' => '<p>One or more instance IDs.</p>',
        'ReportInstanceStatusRequest$Instances' => '<p>One or more instances.</p>',
        'StartInstancesRequest$InstanceIds' => '<p>One or more instance IDs.</p>',
        'StopInstancesRequest$InstanceIds' => '<p>One or more instance IDs.</p>',
        'TerminateInstancesRequest$InstanceIds' => '<p>One or more instance IDs.</p>',
        'UnmonitorInstancesRequest$InstanceIds' => '<p>One or more instance IDs.</p>',
      ],
    ],
    'InstanceLifecycleType' => [
      'base' => NULL,
      'refs' => [
        'Instance$InstanceLifecycle' => '<p>Indicates whether this is a Spot Instance.</p>',
      ],
    ],
    'InstanceList' => [
      'base' => NULL,
      'refs' => [
        'Reservation$Instances' => '<p>One or more instances.</p>',
      ],
    ],
    'InstanceMonitoring' => [
      'base' => '<p>Describes the monitoring information of the instance.</p>',
      'refs' => [
        'InstanceMonitoringList$member' => NULL,
      ],
    ],
    'InstanceMonitoringList' => [
      'base' => NULL,
      'refs' => [
        'MonitorInstancesResult$InstanceMonitorings' => '<p>Monitoring information for one or more instances.</p>',
        'UnmonitorInstancesResult$InstanceMonitorings' => '<p>Monitoring information for one or more instances.</p>',
      ],
    ],
    'InstanceNetworkInterface' => [
      'base' => '<p>Describes a network interface.</p>',
      'refs' => [
        'InstanceNetworkInterfaceList$member' => NULL,
      ],
    ],
    'InstanceNetworkInterfaceAssociation' => [
      'base' => '<p>Describes association information for an Elastic IP address.</p>',
      'refs' => [
        'InstanceNetworkInterface$Association' => '<p>The association information for an Elastic IP associated with the network interface.</p>',
        'InstancePrivateIpAddress$Association' => '<p>The association information for an Elastic IP address for the network interface.</p>',
      ],
    ],
    'InstanceNetworkInterfaceAttachment' => [
      'base' => '<p>Describes a network interface attachment.</p>',
      'refs' => [
        'InstanceNetworkInterface$Attachment' => '<p>The network interface attachment.</p>',
      ],
    ],
    'InstanceNetworkInterfaceList' => [
      'base' => NULL,
      'refs' => [
        'Instance$NetworkInterfaces' => '<p>[EC2-VPC] One or more network interfaces for the instance.</p>',
      ],
    ],
    'InstanceNetworkInterfaceSpecification' => [
      'base' => '<p>Describes a network interface.</p>',
      'refs' => [
        'InstanceNetworkInterfaceSpecificationList$member' => NULL,
      ],
    ],
    'InstanceNetworkInterfaceSpecificationList' => [
      'base' => NULL,
      'refs' => [
        'LaunchSpecification$NetworkInterfaces' => '<p>One or more network interfaces.</p>',
        'RunInstancesRequest$NetworkInterfaces' => '<p>One or more network interfaces.</p>',
        'RequestSpotLaunchSpecification$NetworkInterfaces' => '<p>One or more network interfaces.</p>',
      ],
    ],
    'InstancePrivateIpAddress' => [
      'base' => '<p>Describes a private IP address.</p>',
      'refs' => [
        'InstancePrivateIpAddressList$member' => NULL,
      ],
    ],
    'InstancePrivateIpAddressList' => [
      'base' => NULL,
      'refs' => [
        'InstanceNetworkInterface$PrivateIpAddresses' => '<p>The private IP addresses associated with the network interface.</p>',
      ],
    ],
    'InstanceState' => [
      'base' => '<p>Describes the current state of the instance.</p>',
      'refs' => [
        'Instance$State' => '<p>The current state of the instance.</p>',
        'InstanceStateChange$CurrentState' => '<p>The current state of the instance.</p>',
        'InstanceStateChange$PreviousState' => '<p>The previous state of the instance.</p>',
        'InstanceStatus$InstanceState' => '<p>The intended state of the instance. <a>DescribeInstanceStatus</a> requires that an instance be in the <code>running</code> state.</p>',
      ],
    ],
    'InstanceStateChange' => [
      'base' => '<p>Describes an instance state change.</p>',
      'refs' => [
        'InstanceStateChangeList$member' => NULL,
      ],
    ],
    'InstanceStateChangeList' => [
      'base' => NULL,
      'refs' => [
        'StartInstancesResult$StartingInstances' => '<p>Information about one or more started instances.</p>',
        'StopInstancesResult$StoppingInstances' => '<p>Information about one or more stopped instances.</p>',
        'TerminateInstancesResult$TerminatingInstances' => '<p>Information about one or more terminated instances.</p>',
      ],
    ],
    'InstanceStateName' => [
      'base' => NULL,
      'refs' => [
        'InstanceState$Name' => '<p>The current state of the instance.</p>',
      ],
    ],
    'InstanceStatus' => [
      'base' => '<p>Describes the status of an instance.</p>',
      'refs' => [
        'InstanceStatusList$member' => NULL,
      ],
    ],
    'InstanceStatusDetails' => [
      'base' => '<p>Describes the instance status.</p>',
      'refs' => [
        'InstanceStatusDetailsList$member' => NULL,
      ],
    ],
    'InstanceStatusDetailsList' => [
      'base' => NULL,
      'refs' => [
        'InstanceStatusSummary$Details' => '<p>The system instance health or application instance health.</p>',
      ],
    ],
    'InstanceStatusEvent' => [
      'base' => '<p>Describes an instance event.</p>',
      'refs' => [
        'InstanceStatusEventList$member' => NULL,
      ],
    ],
    'InstanceStatusEventList' => [
      'base' => NULL,
      'refs' => [
        'InstanceStatus$Events' => '<p>Extra information regarding events associated with the instance.</p>',
      ],
    ],
    'InstanceStatusList' => [
      'base' => NULL,
      'refs' => [
        'DescribeInstanceStatusResult$InstanceStatuses' => '<p>One or more instance status descriptions.</p>',
      ],
    ],
    'InstanceStatusSummary' => [
      'base' => '<p>Describes the status of an instance.</p>',
      'refs' => [
        'InstanceStatus$SystemStatus' => '<p>Reports impaired functionality that stems from issues related to the systems that support an instance, such as hardware failures and network connectivity problems.</p>',
        'InstanceStatus$InstanceStatus' => '<p>Reports impaired functionality that stems from issues internal to the instance, such as impaired reachability.</p>',
      ],
    ],
    'InstanceType' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesOfferingsRequest$InstanceType' => '<p>The instance type on which the Reserved Instance can be used. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instance-types.html">Instance Types</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
        'ImportInstanceLaunchSpecification$InstanceType' => '<p>The instance type. This is not supported for VMs imported into a VPC, which are assigned the default security group. After a VM is imported into a VPC, you can specify another security group using the AWS Management Console. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instance-types.html">Instance Types</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>. For more information about the Linux instance types you can import, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/VMImportPrerequisites.html">Before You Get Started</a> in the Amazon Elastic Compute Cloud User Guide for Linux.</p>',
        'Instance$InstanceType' => '<p>The instance type.</p>',
        'InstanceTypeList$member' => NULL,
        'LaunchSpecification$InstanceType' => '<p>The instance type.</p>',
        'ReservedInstances$InstanceType' => '<p>The instance type on which the Reserved Instance can be used.</p>',
        'ReservedInstancesConfiguration$InstanceType' => '<p>The instance type for the modified Reserved Instances.</p>',
        'ReservedInstancesOffering$InstanceType' => '<p>The instance type on which the Reserved Instance can be used.</p>',
        'RunInstancesRequest$InstanceType' => '<p>The instance type. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instance-types.html">Instance Types</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>Default: <code>m1.small</code></p>',
        'SpotPrice$InstanceType' => '<p>The instance type.</p>',
        'RequestSpotLaunchSpecification$InstanceType' => '<p>The instance type.</p>',
      ],
    ],
    'InstanceTypeList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSpotPriceHistoryRequest$InstanceTypes' => '<p>Filters the results by the specified instance types.</p>',
      ],
    ],
    'Integer' => [
      'base' => NULL,
      'refs' => [
        'AssignPrivateIpAddressesRequest$SecondaryPrivateIpAddressCount' => '<p>The number of secondary IP addresses to assign to the network interface. You can\'t specify this parameter when also specifying private IP addresses.</p>',
        'AttachNetworkInterfaceRequest$DeviceIndex' => '<p>The index of the device for the network interface attachment.</p>',
        'AuthorizeSecurityGroupEgressRequest$FromPort' => '<p>The start of port range for the TCP and UDP protocols, or an ICMP type number. For the ICMP type number, use <code>-1</code> to specify all ICMP types.</p>',
        'AuthorizeSecurityGroupEgressRequest$ToPort' => '<p>The end of port range for the TCP and UDP protocols, or an ICMP code number. For the ICMP code number, use <code>-1</code> to specify all ICMP codes for the ICMP type.</p>',
        'AuthorizeSecurityGroupIngressRequest$FromPort' => '<p>The start of port range for the TCP and UDP protocols, or an ICMP type number. For the ICMP type number, use <code>-1</code> to specify all ICMP types.</p>',
        'AuthorizeSecurityGroupIngressRequest$ToPort' => '<p>The end of port range for the TCP and UDP protocols, or an ICMP code number. For the ICMP code number, use <code>-1</code> to specify all ICMP codes for the ICMP type.</p>',
        'CreateCustomerGatewayRequest$BgpAsn' => '<p>For devices that support BGP, the customer gateway\'s BGP ASN.</p> <p>Default: 65000</p>',
        'CreateNetworkAclEntryRequest$RuleNumber' => '<p>The rule number for the entry (for example, 100]. ACL entries are processed in ascending order by rule number.</p> <p>Constraints: Positive integer from 1 to 32766</p>',
        'CreateNetworkInterfaceRequest$SecondaryPrivateIpAddressCount' => '<p>The number of secondary private IP addresses to assign to a network interface. When you specify a number of secondary IP addresses, Amazon EC2 selects these IP addresses within the subnet range. You can\'t specify this option and specify more than one private IP address using <code>privateIpAddresses</code>.</p> <p>The number of IP addresses you can assign to a network interface varies by instance type. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-eni.html#AvailableIpPerENI">Private IP Addresses Per ENI Per Instance Type</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
        'CreateReservedInstancesListingRequest$InstanceCount' => '<p>The number of instances that are a part of a Reserved Instance account to be listed in the Reserved Instance Marketplace. This number should be less than or equal to the instance count associated with the Reserved Instance ID specified in this call.</p>',
        'CreateVolumeRequest$Size' => '<p>The size of the volume, in GiBs.</p> <p>Constraints: If the volume type is <code>io1</code>, the minimum size of the volume is 4 GiB; otherwise, the minimum size is 1 GiB. The maximum volume size is 1024 GiB. If you specify a snapshot, the volume size must be equal to or larger than the snapshot size.</p> <p>Default: If you\'re creating the volume from a snapshot and don\'t specify a volume size, the default is the snapshot size.</p>',
        'CreateVolumeRequest$Iops' => '<p>Only valid for Provisioned IOPS (SSD] volumes. The number of I/O operations per second (IOPS] to provision for the volume.</p>',
        'DeleteNetworkAclEntryRequest$RuleNumber' => '<p>The rule number of the entry to delete.</p>',
        'DescribeClassicLinkInstancesRequest$MaxResults' => '<p> The maximum number of items to return for this request. The request returns a token that you can specify in a subsequent call to get the next set of results.</p> <p>Constraint: If the value is greater than 1000, we return only 1000 items.</p>',
        'DescribeInstanceStatusRequest$MaxResults' => '<p>The maximum number of paginated instance items per response. The call also returns a token that you can specify in a subsequent call to get the next set of results. If the value is greater than 1000, we return only 1000 items.</p> <p>Default: 1000</p>',
        'DescribeInstancesRequest$MaxResults' => '<p>The maximum number of items to return for this call. The call also returns a token that you can specify in a subsequent call to get the next set of results. If the value is greater than 1000, we return only 1000 items.</p>',
        'DescribeReservedInstancesOfferingsRequest$MaxResults' => '<p>The maximum number of offerings to return. The maximum is 100.</p> <p>Default: 100</p>',
        'DescribeReservedInstancesOfferingsRequest$MaxInstanceCount' => '<p>The maximum number of instances to filter when searching for offerings.</p> <p>Default: 20</p>',
        'DescribeSpotPriceHistoryRequest$MaxResults' => '<p>The maximum number of items to return for this call. The call also returns a token that you can specify in a subsequent call to get the next set of results.</p>',
        'DescribeTagsRequest$MaxResults' => '<p>The maximum number of items to return for this call. The call also returns a token that you can specify in a subsequent call to get the next set of results. If the value is greater than 1000, we return only 1000 items.</p>',
        'DescribeVolumeStatusRequest$MaxResults' => '<p>The maximum number of paginated volume items per response.</p>',
        'DescribeVolumesRequest$MaxResults' => '<p>The maximum number of volume results returned by <code>DescribeVolumes</code> in paginated output. When this parameter is used, <code>DescribeVolumes</code> only returns <code>MaxResults</code> results in a single page along with a <code>NextToken</code> response element. The remaining results of the initial request can be seen by sending another <code>DescribeVolumes</code> request with the returned <code>NextToken</code> value. This value can be between 5 and 1000; if <code>MaxResults</code> is given a value larger than 1000, only 1000 results are returned. If this parameter is not used, then <code>DescribeVolumes</code> returns all results.</p>',
        'EbsBlockDevice$VolumeSize' => '<p>The size of the volume, in GiB.</p> <p>Constraints: If the volume type is <code>io1</code>, the minimum size of the volume is 4 GiB; otherwise, the minimum size is 1 GiB. The maximum volume size is 1024 GiB. If you specify a snapshot, the volume size must be equal to or larger than the snapshot size.</p> <p>Default: If you\'re creating the volume from a snapshot and don\'t specify a volume size, the default is the snapshot size.</p>',
        'EbsBlockDevice$Iops' => '<p>The number of I/O operations per second (IOPS] that the volume supports. For Provisioned IOPS (SSD] volumes, this represents the number of IOPS that are provisioned for the volume. For General Purpose (SSD] volumes, this represents the baseline performance of the volume and the rate at which the volume accumulates I/O credits for bursting. For more information on General Purpose (SSD] baseline performance, I/O credits, and bursting, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSVolumeTypes.html">Amazon EBS Volume Types</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>Constraint: Range is 100 to 4000 for Provisioned IOPS (SSD] volumes and 3 to 3072 for General Purpose (SSD] volumes.</p> <p>Condition: This parameter is required for requests to create <code>io1</code> volumes; it is not used in requests to create <code>standard</code> or <code>gp2</code> volumes.</p>',
        'IcmpTypeCode$Type' => '<p>The ICMP code. A value of -1 means all codes for the specified ICMP type.</p>',
        'IcmpTypeCode$Code' => '<p>The ICMP type. A value of -1 means all types.</p>',
        'Instance$AmiLaunchIndex' => '<p>The AMI launch index, which can be used to find this instance in the launch group.</p>',
        'InstanceCount$InstanceCount' => '<p>he number of listed Reserved Instances in the state specified by the <code>state</code>.</p>',
        'InstanceNetworkInterfaceAttachment$DeviceIndex' => '<p>The index of the device on the instance for the network interface attachment.</p>',
        'InstanceNetworkInterfaceSpecification$DeviceIndex' => '<p>The index of the device on the instance for the network interface attachment. If you are specifying a network interface in a <a>RunInstances</a> request, you must provide the device index.</p>',
        'InstanceNetworkInterfaceSpecification$SecondaryPrivateIpAddressCount' => '<p>The number of secondary private IP addresses. You can\'t specify this option and specify more than one private IP address using the private IP addresses option.</p>',
        'InstanceState$Code' => '<p>The low byte represents the state. The high byte is an opaque internal value and should be ignored.</p> <ul> <li><p><code>0</code> : <code>pending</code></p></li> <li><p><code>16</code> : <code>running</code></p></li> <li><p><code>32</code> : <code>shutting-down</code></p></li> <li><p><code>48</code> : <code>terminated</code></p></li> <li><p><code>64</code> : <code>stopping</code></p></li> <li><p><code>80</code> : <code>stopped</code></p></li> </ul>',
        'IpPermission$FromPort' => '<p>The start of port range for the TCP and UDP protocols, or an ICMP type number. A value of <code>-1</code> indicates all ICMP types.</p>',
        'IpPermission$ToPort' => '<p>The end of port range for the TCP and UDP protocols, or an ICMP code. A value of <code>-1</code> indicates all ICMP codes for the specified ICMP type.</p>',
        'NetworkAclEntry$RuleNumber' => '<p>The rule number for the entry. ACL entries are processed in ascending order by rule number.</p>',
        'NetworkInterfaceAttachment$DeviceIndex' => '<p>The device index of the network interface attachment on the instance.</p>',
        'PortRange$From' => '<p>The first port in the range.</p>',
        'PortRange$To' => '<p>The last port in the range.</p>',
        'PricingDetail$Count' => '<p>The number of instances available for the price.</p>',
        'PurchaseReservedInstancesOfferingRequest$InstanceCount' => '<p>The number of Reserved Instances to purchase.</p>',
        'ReplaceNetworkAclEntryRequest$RuleNumber' => '<p>The rule number of the entry to replace.</p>',
        'RequestSpotInstancesRequest$InstanceCount' => '<p>The maximum number of Spot Instances to launch.</p> <p>Default: 1</p>',
        'ReservedInstances$InstanceCount' => '<p>The number of Reserved Instances purchased.</p>',
        'ReservedInstancesConfiguration$InstanceCount' => '<p>The number of modified Reserved Instances.</p>',
        'RevokeSecurityGroupEgressRequest$FromPort' => '<p>The start of port range for the TCP and UDP protocols, or an ICMP type number. For the ICMP type number, use <code>-1</code> to specify all ICMP types.</p>',
        'RevokeSecurityGroupEgressRequest$ToPort' => '<p>The end of port range for the TCP and UDP protocols, or an ICMP code number. For the ICMP code number, use <code>-1</code> to specify all ICMP codes for the ICMP type.</p>',
        'RevokeSecurityGroupIngressRequest$FromPort' => '<p>The start of port range for the TCP and UDP protocols, or an ICMP type number. For the ICMP type number, use <code>-1</code> to specify all ICMP types.</p>',
        'RevokeSecurityGroupIngressRequest$ToPort' => '<p>The end of port range for the TCP and UDP protocols, or an ICMP code number. For the ICMP code number, use <code>-1</code> to specify all ICMP codes for the ICMP type.</p>',
        'RunInstancesRequest$MinCount' => '<p>The minimum number of instances to launch. If you specify a minimum that is more instances than Amazon EC2 can launch in the target Availability Zone, Amazon EC2 launches no instances.</p> <p>Constraints: Between 1 and the maximum number you\'re allowed for the specified instance type. For more information about the default limits, and how to request an increase, see <a href="http://aws.amazon.com/ec2/faqs/#How_many_instances_can_I_run_in_Amazon_EC2">How many instances can I run in Amazon EC2</a> in the Amazon EC2 General FAQ.</p>',
        'RunInstancesRequest$MaxCount' => '<p>The maximum number of instances to launch. If you specify more instances than Amazon EC2 can launch in the target Availability Zone, Amazon EC2 launches the largest possible number of instances above <code>MinCount</code>.</p> <p>Constraints: Between 1 and the maximum number you\'re allowed for the specified instance type. For more information about the default limits, and how to request an increase, see <a href="http://aws.amazon.com/ec2/faqs/#How_many_instances_can_I_run_in_Amazon_EC2">How many instances can I run in Amazon EC2</a> in the Amazon EC2 General FAQ.</p>',
        'Snapshot$VolumeSize' => '<p>The size of the volume, in GiB.</p>',
        'Subnet$AvailableIpAddressCount' => '<p>The number of unused IP addresses in the subnet. Note that the IP addresses for any stopped instances are considered unavailable.</p>',
        'VgwTelemetry$AcceptedRouteCount' => '<p>The number of accepted routes.</p>',
        'Volume$Size' => '<p>The size of the volume, in GiBs.</p>',
        'Volume$Iops' => '<p>The number of I/O operations per second (IOPS] that the volume supports. For Provisioned IOPS (SSD] volumes, this represents the number of IOPS that are provisioned for the volume. For General Purpose (SSD] volumes, this represents the baseline performance of the volume and the rate at which the volume accumulates I/O credits for bursting. For more information on General Purpose (SSD] baseline performance, I/O credits, and bursting, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/EBSVolumeTypes.html">Amazon EBS Volume Types</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>Constraint: Range is 100 to 4000 for Provisioned IOPS (SSD] volumes and 3 to 3072 for General Purpose (SSD] volumes.</p> <p>Condition: This parameter is required for requests to create <code>io1</code> volumes; it is not used in requests to create <code>standard</code> or <code>gp2</code> volumes.</p>',
      ],
    ],
    'InternetGateway' => [
      'base' => '<p>Describes an Internet gateway.</p>',
      'refs' => [
        'CreateInternetGatewayResult$InternetGateway' => '<p>Information about the Internet gateway.</p>',
        'InternetGatewayList$member' => NULL,
      ],
    ],
    'InternetGatewayAttachment' => [
      'base' => '<p>Describes the attachment of a VPC to an Internet gateway.</p>',
      'refs' => [
        'InternetGatewayAttachmentList$member' => NULL,
      ],
    ],
    'InternetGatewayAttachmentList' => [
      'base' => NULL,
      'refs' => [
        'InternetGateway$Attachments' => '<p>Any VPCs attached to the Internet gateway.</p>',
      ],
    ],
    'InternetGatewayList' => [
      'base' => NULL,
      'refs' => [
        'DescribeInternetGatewaysResult$InternetGateways' => '<p>Information about one or more Internet gateways.</p>',
      ],
    ],
    'IpPermission' => [
      'base' => '<p>Describes a security group rule.</p>',
      'refs' => [
        'IpPermissionList$member' => NULL,
      ],
    ],
    'IpPermissionList' => [
      'base' => NULL,
      'refs' => [
        'AuthorizeSecurityGroupEgressRequest$IpPermissions' => '<p>A set of IP permissions. You can\'t specify a destination security group and a CIDR IP address range.</p>',
        'AuthorizeSecurityGroupIngressRequest$IpPermissions' => '<p>A set of IP permissions. You can\'t specify a source security group and a CIDR IP address range.</p>',
        'RevokeSecurityGroupEgressRequest$IpPermissions' => '<p>A set of IP permissions. You can\'t specify a destination security group and a CIDR IP address range.</p>',
        'RevokeSecurityGroupIngressRequest$IpPermissions' => '<p>A set of IP permissions. You can\'t specify a source security group and a CIDR IP address range.</p>',
        'SecurityGroup$IpPermissions' => '<p>One or more inbound rules associated with the security group.</p>',
        'SecurityGroup$IpPermissionsEgress' => '<p>[EC2-VPC] One or more outbound rules associated with the security group.</p>',
      ],
    ],
    'IpRange' => [
      'base' => '<p>Describes an IP range.</p>',
      'refs' => [
        'IpRangeList$member' => NULL,
      ],
    ],
    'IpRangeList' => [
      'base' => NULL,
      'refs' => [
        'IpPermission$IpRanges' => '<p>One or more IP ranges.</p>',
      ],
    ],
    'KeyNameStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeKeyPairsRequest$KeyNames' => '<p>One or more key pair names.</p> <p>Default: Describes all your key pairs.</p>',
      ],
    ],
    'KeyPair' => [
      'base' => '<p>Describes a key pair.</p>',
      'refs' => [],
    ],
    'KeyPairInfo' => [
      'base' => '<p>Describes a key pair.</p>',
      'refs' => [
        'KeyPairList$member' => NULL,
      ],
    ],
    'KeyPairList' => [
      'base' => NULL,
      'refs' => [
        'DescribeKeyPairsResult$KeyPairs' => '<p>Information about one or more key pairs.</p>',
      ],
    ],
    'LaunchPermission' => [
      'base' => '<p>Describes a launch permission.</p>',
      'refs' => [
        'LaunchPermissionList$member' => NULL,
      ],
    ],
    'LaunchPermissionList' => [
      'base' => NULL,
      'refs' => [
        'ImageAttribute$LaunchPermissions' => '<p>One or more launch permissions.</p>',
        'LaunchPermissionModifications$Add' => '<p>The AWS account ID to add to the list of launch permissions for the AMI.</p>',
        'LaunchPermissionModifications$Remove' => '<p>The AWS account ID to remove from the list of launch permissions for the AMI.</p>',
      ],
    ],
    'LaunchPermissionModifications' => [
      'base' => '<p>Describes a launch permission modification.</p>',
      'refs' => [
        'ModifyImageAttributeRequest$LaunchPermission' => '<p></p>',
      ],
    ],
    'LaunchSpecification' => [
      'base' => '<p>Describes the launch specification for an instance.</p>',
      'refs' => [
        'SpotInstanceRequest$LaunchSpecification' => '<p>Additional information for launching instances.</p>',
      ],
    ],
    'ListingState' => [
      'base' => NULL,
      'refs' => [
        'InstanceCount$State' => '<p>The states of the listed Reserved Instances.</p>',
      ],
    ],
    'ListingStatus' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstancesListing$Status' => '<p>The status of the Reserved Instance listing.</p>',
      ],
    ],
    'Long' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesOfferingsRequest$MinDuration' => '<p>The minimum duration (in seconds] to filter when searching for offerings.</p> <p>Default: 2592000 (1 month]</p>',
        'DescribeReservedInstancesOfferingsRequest$MaxDuration' => '<p>The maximum duration (in seconds] to filter when searching for offerings.</p> <p>Default: 94608000 (3 years]</p>',
        'DiskImageDescription$Size' => '<p>The size of the disk image.</p>',
        'DiskImageDetail$Bytes' => NULL,
        'DiskImageVolumeDescription$Size' => '<p>The size of the volume.</p>',
        'ImportInstanceVolumeDetailItem$BytesConverted' => '<p>The number of bytes converted so far.</p>',
        'ImportVolumeTaskDetails$BytesConverted' => '<p>The number of bytes converted so far.</p>',
        'PriceSchedule$Term' => '<p>The number of months remaining in the reservation. For example, 2 is the second to the last month before the capacity reservation expires.</p>',
        'PriceScheduleSpecification$Term' => '<p>The number of months remaining in the reservation. For example, 2 is the second to the last month before the capacity reservation expires.</p>',
        'ReservedInstances$Duration' => '<p>The duration of the Reserved Instance, in seconds.</p>',
        'ReservedInstancesOffering$Duration' => '<p>The duration of the Reserved Instance, in seconds.</p>',
        'VolumeDetail$Size' => '<p>The size of the volume, in GiB.</p>',
      ],
    ],
    'ModifyImageAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyInstanceAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyNetworkInterfaceAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyReservedInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyReservedInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifySnapshotAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifySubnetAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyVolumeAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyVpcAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'MonitorInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'MonitorInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Monitoring' => [
      'base' => '<p>Describes the monitoring for the instance.</p>',
      'refs' => [
        'Instance$Monitoring' => '<p>The monitoring information for the instance.</p>',
        'InstanceMonitoring$Monitoring' => '<p>The monitoring information.</p>',
      ],
    ],
    'MonitoringState' => [
      'base' => NULL,
      'refs' => [
        'Monitoring$State' => '<p>Indicates whether monitoring is enabled for the instance.</p>',
      ],
    ],
    'NetworkAcl' => [
      'base' => '<p>Describes a network ACL.</p>',
      'refs' => [
        'CreateNetworkAclResult$NetworkAcl' => '<p>Information about the network ACL.</p>',
        'NetworkAclList$member' => NULL,
      ],
    ],
    'NetworkAclAssociation' => [
      'base' => '<p>Describes an association between a network ACL and a subnet.</p>',
      'refs' => [
        'NetworkAclAssociationList$member' => NULL,
      ],
    ],
    'NetworkAclAssociationList' => [
      'base' => NULL,
      'refs' => [
        'NetworkAcl$Associations' => '<p>Any associations between the network ACL and one or more subnets</p>',
      ],
    ],
    'NetworkAclEntry' => [
      'base' => '<p>Describes an entry in a network ACL.</p>',
      'refs' => [
        'NetworkAclEntryList$member' => NULL,
      ],
    ],
    'NetworkAclEntryList' => [
      'base' => NULL,
      'refs' => [
        'NetworkAcl$Entries' => '<p>One or more entries (rules] in the network ACL.</p>',
      ],
    ],
    'NetworkAclList' => [
      'base' => NULL,
      'refs' => [
        'DescribeNetworkAclsResult$NetworkAcls' => '<p>Information about one or more network ACLs.</p>',
      ],
    ],
    'NetworkInterface' => [
      'base' => '<p>Describes a network interface.</p>',
      'refs' => [
        'CreateNetworkInterfaceResult$NetworkInterface' => '<p>Information about the network interface.</p>',
        'NetworkInterfaceList$member' => NULL,
      ],
    ],
    'NetworkInterfaceAssociation' => [
      'base' => '<p>Describes association information for an Elastic IP address.</p>',
      'refs' => [
        'NetworkInterface$Association' => '<p>The association information for an Elastic IP associated with the network interface.</p>',
        'NetworkInterfacePrivateIpAddress$Association' => '<p>The association information for an Elastic IP address associated with the network interface.</p>',
      ],
    ],
    'NetworkInterfaceAttachment' => [
      'base' => '<p>Describes a network interface attachment.</p>',
      'refs' => [
        'DescribeNetworkInterfaceAttributeResult$Attachment' => '<p>The attachment (if any] of the network interface.</p>',
        'NetworkInterface$Attachment' => '<p>The network interface attachment.</p>',
      ],
    ],
    'NetworkInterfaceAttachmentChanges' => [
      'base' => '<p>Describes an attachment change.</p>',
      'refs' => [
        'ModifyNetworkInterfaceAttributeRequest$Attachment' => '<p>Information about the interface attachment. If modifying the \'delete on termination\' attribute, you must specify the ID of the interface attachment.</p>',
      ],
    ],
    'NetworkInterfaceAttribute' => [
      'base' => NULL,
      'refs' => [
        'DescribeNetworkInterfaceAttributeRequest$Attribute' => '<p>The attribute of the network interface.</p>',
      ],
    ],
    'NetworkInterfaceIdList' => [
      'base' => NULL,
      'refs' => [
        'DescribeNetworkInterfacesRequest$NetworkInterfaceIds' => '<p>One or more network interface IDs.</p> <p>Default: Describes all your network interfaces.</p>',
      ],
    ],
    'NetworkInterfaceList' => [
      'base' => NULL,
      'refs' => [
        'DescribeNetworkInterfacesResult$NetworkInterfaces' => '<p>Information about one or more network interfaces.</p>',
      ],
    ],
    'NetworkInterfacePrivateIpAddress' => [
      'base' => '<p>Describes the private IP address of a network interface.</p>',
      'refs' => [
        'NetworkInterfacePrivateIpAddressList$member' => NULL,
      ],
    ],
    'NetworkInterfacePrivateIpAddressList' => [
      'base' => NULL,
      'refs' => [
        'NetworkInterface$PrivateIpAddresses' => '<p>The private IP addresses associated with the network interface.</p>',
      ],
    ],
    'NetworkInterfaceStatus' => [
      'base' => NULL,
      'refs' => [
        'InstanceNetworkInterface$Status' => '<p>The status of the network interface.</p>',
        'NetworkInterface$Status' => '<p>The status of the network interface.</p>',
      ],
    ],
    'OfferingTypeValues' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesOfferingsRequest$OfferingType' => '<p>The Reserved Instance offering type. If you are using tools that predate the 2011-11-01 API version, you only have access to the <code>Medium Utilization</code> Reserved Instance offering type. </p>',
        'DescribeReservedInstancesRequest$OfferingType' => '<p>The Reserved Instance offering type. If you are using tools that predate the 2011-11-01 API version, you only have access to the <code>Medium Utilization</code> Reserved Instance offering type. </p>',
        'ReservedInstances$OfferingType' => '<p>The Reserved Instance offering type.</p>',
        'ReservedInstancesOffering$OfferingType' => '<p>The Reserved Instance offering type.</p>',
      ],
    ],
    'OwnerStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeImagesRequest$Owners' => '<p>Filters the images by the owner. Specify an AWS account ID, <code>amazon</code> (owner is Amazon], <code>aws-marketplace</code> (owner is AWS Marketplace], <code>self</code> (owner is the sender of the request]. Omitting this option returns all images for which you have launch permissions, regardless of ownership.</p>',
        'DescribeSnapshotsRequest$OwnerIds' => '<p>Returns the snapshots owned by the specified owner. Multiple owners can be specified.</p>',
      ],
    ],
    'PermissionGroup' => [
      'base' => NULL,
      'refs' => [
        'CreateVolumePermission$Group' => '<p>The specific group that is to be added or removed from a volume\'s list of create volume permissions.</p>',
        'LaunchPermission$Group' => '<p>The name of the group.</p>',
      ],
    ],
    'Placement' => [
      'base' => '<p>Describes the placement for the instance.</p>',
      'refs' => [
        'ImportInstanceLaunchSpecification$Placement' => NULL,
        'Instance$Placement' => '<p>The location where the instance launched.</p>',
        'RunInstancesRequest$Placement' => '<p>The placement for the instance.</p>',
      ],
    ],
    'PlacementGroup' => [
      'base' => '<p>Describes a placement group.</p>',
      'refs' => [
        'PlacementGroupList$member' => NULL,
      ],
    ],
    'PlacementGroupList' => [
      'base' => NULL,
      'refs' => [
        'DescribePlacementGroupsResult$PlacementGroups' => '<p>One or more placement groups.</p>',
      ],
    ],
    'PlacementGroupState' => [
      'base' => NULL,
      'refs' => [
        'PlacementGroup$State' => '<p>The state of the placement group.</p>',
      ],
    ],
    'PlacementGroupStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribePlacementGroupsRequest$GroupNames' => '<p>One or more placement group names.</p> <p>Default: Describes all your placement groups, or only those otherwise specified.</p>',
      ],
    ],
    'PlacementStrategy' => [
      'base' => NULL,
      'refs' => [
        'CreatePlacementGroupRequest$Strategy' => '<p>The placement strategy.</p>',
        'PlacementGroup$Strategy' => '<p>The placement strategy.</p>',
      ],
    ],
    'PlatformValues' => [
      'base' => NULL,
      'refs' => [
        'Image$Platform' => '<p>The value is <code>Windows</code> for Windows AMIs; otherwise blank.</p>',
        'ImportInstanceRequest$Platform' => '<p>The instance operating system.</p>',
        'ImportInstanceTaskDetails$Platform' => '<p>The instance operating system.</p>',
        'Instance$Platform' => '<p>The value is <code>Windows</code> for Windows instances; otherwise blank.</p>',
      ],
    ],
    'PortRange' => [
      'base' => '<p>Describes a range of ports.</p>',
      'refs' => [
        'CreateNetworkAclEntryRequest$PortRange' => '<p>TCP or UDP protocols: The range of ports the rule applies to.</p>',
        'NetworkAclEntry$PortRange' => '<p>TCP or UDP protocols: The range of ports the rule applies to.</p>',
        'ReplaceNetworkAclEntryRequest$PortRange' => '<p>TCP or UDP protocols: The range of ports the rule applies to. Required if specifying 6 (TCP] or 17 (UDP] for the protocol.</p>',
      ],
    ],
    'PriceSchedule' => [
      'base' => '<p>Describes the price for a Reserved Instance.</p>',
      'refs' => [
        'PriceScheduleList$member' => NULL,
      ],
    ],
    'PriceScheduleList' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstancesListing$PriceSchedules' => '<p>The price of the Reserved Instance listing.</p>',
      ],
    ],
    'PriceScheduleSpecification' => [
      'base' => '<p>Describes the price for a Reserved Instance.</p>',
      'refs' => [
        'PriceScheduleSpecificationList$member' => NULL,
      ],
    ],
    'PriceScheduleSpecificationList' => [
      'base' => NULL,
      'refs' => [
        'CreateReservedInstancesListingRequest$PriceSchedules' => '<p>A list specifying the price of the Reserved Instance for each month remaining in the Reserved Instance term.</p>',
      ],
    ],
    'PricingDetail' => [
      'base' => '<p>Describes a Reserved Instance offering.</p>',
      'refs' => [
        'PricingDetailsList$member' => NULL,
      ],
    ],
    'PricingDetailsList' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstancesOffering$PricingDetails' => '<p>The pricing details of the Reserved Instance offering.</p>',
      ],
    ],
    'PrivateIpAddressSpecification' => [
      'base' => '<p>Describes a secondary private IP address for a network interface.</p>',
      'refs' => [
        'PrivateIpAddressSpecificationList$member' => NULL,
      ],
    ],
    'PrivateIpAddressSpecificationList' => [
      'base' => NULL,
      'refs' => [
        'CreateNetworkInterfaceRequest$PrivateIpAddresses' => '<p>One or more private IP addresses.</p>',
        'InstanceNetworkInterfaceSpecification$PrivateIpAddresses' => '<p>One or more private IP addresses to assign to the network interface. Only one private IP address can be designated as primary.</p>',
      ],
    ],
    'PrivateIpAddressStringList' => [
      'base' => NULL,
      'refs' => [
        'AssignPrivateIpAddressesRequest$PrivateIpAddresses' => '<p>One or more IP addresses to be assigned as a secondary private IP address to the network interface. You can\'t specify this parameter when also specifying a number of secondary IP addresses.</p> <p>If you don\'t specify an IP address, Amazon EC2 automatically selects an IP address within the subnet range.</p>',
        'UnassignPrivateIpAddressesRequest$PrivateIpAddresses' => '<p>The secondary private IP addresses to unassign from the network interface. You can specify this option multiple times to unassign more than one IP address.</p>',
      ],
    ],
    'ProductCode' => [
      'base' => '<p>Describes a product code.</p>',
      'refs' => [
        'ProductCodeList$member' => NULL,
      ],
    ],
    'ProductCodeList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSnapshotAttributeResult$ProductCodes' => '<p>A list of product codes.</p>',
        'DescribeVolumeAttributeResult$ProductCodes' => '<p>A list of product codes.</p>',
        'Image$ProductCodes' => '<p>Any product codes associated with the AMI.</p>',
        'ImageAttribute$ProductCodes' => '<p>One or more product codes.</p>',
        'Instance$ProductCodes' => '<p>The product codes attached to this instance.</p>',
        'InstanceAttribute$ProductCodes' => '<p>A list of product codes.</p>',
      ],
    ],
    'ProductCodeStringList' => [
      'base' => NULL,
      'refs' => [
        'ModifyImageAttributeRequest$ProductCodes' => '<p>One or more product codes. After you add a product code to an AMI, it can\'t be removed. This is only valid when modifying the <code>productCodes</code> attribute.</p>',
      ],
    ],
    'ProductCodeValues' => [
      'base' => NULL,
      'refs' => [
        'ProductCode$ProductCodeType' => '<p>The type of product code.</p>',
      ],
    ],
    'ProductDescriptionList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSpotPriceHistoryRequest$ProductDescriptions' => '<p>Filters the results by the specified basic product descriptions.</p>',
      ],
    ],
    'PropagatingVgw' => [
      'base' => '<p>Describes a virtual private gateway propagating route.</p>',
      'refs' => [
        'PropagatingVgwList$member' => NULL,
      ],
    ],
    'PropagatingVgwList' => [
      'base' => NULL,
      'refs' => [
        'RouteTable$PropagatingVgws' => '<p>Any virtual private gateway (VGW] propagating routes.</p>',
      ],
    ],
    'PublicIpStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeAddressesRequest$PublicIps' => '<p>[EC2-Classic] One or more Elastic IP addresses.</p> <p>Default: Describes all your Elastic IP addresses.</p>',
      ],
    ],
    'PurchaseReservedInstancesOfferingRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PurchaseReservedInstancesOfferingResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RIProductDescription' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesOfferingsRequest$ProductDescription' => '<p>The Reserved Instance description. Instances that include <code>(Amazon VPC]</code> in the description are for use with Amazon VPC.</p>',
        'ReservedInstances$ProductDescription' => '<p>The Reserved Instance description.</p>',
        'ReservedInstancesOffering$ProductDescription' => '<p>The Reserved Instance description.</p>',
        'SpotInstanceRequest$ProductDescription' => '<p>The product description associated with the Spot Instance.</p>',
        'SpotPrice$ProductDescription' => '<p>A general description of the AMI.</p>',
      ],
    ],
    'ReasonCodesList' => [
      'base' => NULL,
      'refs' => [
        'ReportInstanceStatusRequest$ReasonCodes' => '<p>One or more reason codes that describes the health state of your instance.</p> <ul> <li><p><code>instance-stuck-in-state</code>: My instance is stuck in a state.</p></li> <li><p><code>unresponsive</code>: My instance is unresponsive.</p></li> <li><p><code>not-accepting-credentials</code>: My instance is not accepting my credentials.</p></li> <li><p><code>password-not-available</code>: A password is not available for my instance.</p></li> <li><p><code>performance-network</code>: My instance is experiencing performance problems which I believe are network related.</p></li> <li><p><code>performance-instance-store</code>: My instance is experiencing performance problems which I believe are related to the instance stores.</p></li> <li><p><code>performance-ebs-volume</code>: My instance is experiencing performance problems which I believe are related to an EBS volume.</p></li> <li><p><code>performance-other</code>: My instance is experiencing performance problems.</p></li> <li><p><code>other</code>: [explain using the description parameter]</p></li> </ul>',
      ],
    ],
    'RebootInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RecurringCharge' => [
      'base' => '<p>Describes a recurring charge.</p>',
      'refs' => [
        'RecurringChargesList$member' => NULL,
      ],
    ],
    'RecurringChargeFrequency' => [
      'base' => NULL,
      'refs' => [
        'RecurringCharge$Frequency' => '<p>The frequency of the recurring charge.</p>',
      ],
    ],
    'RecurringChargesList' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstances$RecurringCharges' => '<p>The recurring charge tag assigned to the resource.</p>',
        'ReservedInstancesOffering$RecurringCharges' => '<p>The recurring charge tag assigned to the resource.</p>',
      ],
    ],
    'Region' => [
      'base' => '<p>Describes a region.</p>',
      'refs' => [
        'RegionList$member' => NULL,
      ],
    ],
    'RegionList' => [
      'base' => NULL,
      'refs' => [
        'DescribeRegionsResult$Regions' => '<p>Information about one or more regions.</p>',
      ],
    ],
    'RegionNameStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeRegionsRequest$RegionNames' => '<p>The names of one or more regions.</p>',
      ],
    ],
    'RegisterImageRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RegisterImageResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RejectVpcPeeringConnectionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RejectVpcPeeringConnectionResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReleaseAddressRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReplaceNetworkAclAssociationRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReplaceNetworkAclAssociationResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReplaceNetworkAclEntryRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReplaceRouteRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReplaceRouteTableAssociationRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReplaceRouteTableAssociationResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReportInstanceReasonCodes' => [
      'base' => NULL,
      'refs' => [
        'ReasonCodesList$member' => NULL,
      ],
    ],
    'ReportInstanceStatusRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReportStatusType' => [
      'base' => NULL,
      'refs' => [
        'ReportInstanceStatusRequest$Status' => '<p>The status of all instances listed.</p>',
      ],
    ],
    'RequestSpotInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RequestSpotInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Reservation' => [
      'base' => '<p>Describes a reservation.</p>',
      'refs' => [
        'ReservationList$member' => NULL,
      ],
    ],
    'ReservationList' => [
      'base' => NULL,
      'refs' => [
        'DescribeInstancesResult$Reservations' => '<p>One or more reservations.</p>',
      ],
    ],
    'ReservedInstanceLimitPrice' => [
      'base' => '<p>Describes the limit price of a Reserved Instance offering.</p>',
      'refs' => [
        'PurchaseReservedInstancesOfferingRequest$LimitPrice' => '<p>Specified for Reserved Instance Marketplace offerings to limit the total order and ensure that the Reserved Instances are not purchased at unexpected prices.</p>',
      ],
    ],
    'ReservedInstanceState' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstances$State' => '<p>The state of the Reserved Instance purchase.</p>',
      ],
    ],
    'ReservedInstances' => [
      'base' => '<p>Describes a Reserved Instance.</p>',
      'refs' => [
        'ReservedInstancesList$member' => NULL,
      ],
    ],
    'ReservedInstancesConfiguration' => [
      'base' => '<p>Describes the configuration settings for the modified Reserved Instances.</p>',
      'refs' => [
        'ReservedInstancesConfigurationList$member' => NULL,
        'ReservedInstancesModificationResult$TargetConfiguration' => '<p>The target Reserved Instances configurations supplied as part of the modification request.</p>',
      ],
    ],
    'ReservedInstancesConfigurationList' => [
      'base' => NULL,
      'refs' => [
        'ModifyReservedInstancesRequest$TargetConfigurations' => '<p>The configuration settings for the Reserved Instances to modify.</p>',
      ],
    ],
    'ReservedInstancesId' => [
      'base' => '<p>Describes the ID of a Reserved Instance.</p>',
      'refs' => [
        'ReservedIntancesIds$member' => NULL,
      ],
    ],
    'ReservedInstancesIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesRequest$ReservedInstancesIds' => '<p>One or more Reserved Instance IDs.</p> <p>Default: Describes all your Reserved Instances, or only those otherwise specified.</p>',
        'ModifyReservedInstancesRequest$ReservedInstancesIds' => '<p>The IDs of the Reserved Instances to modify.</p>',
      ],
    ],
    'ReservedInstancesList' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesResult$ReservedInstances' => '<p>A list of Reserved Instances.</p>',
      ],
    ],
    'ReservedInstancesListing' => [
      'base' => '<p>Describes a Reserved Instance listing.</p>',
      'refs' => [
        'ReservedInstancesListingList$member' => NULL,
      ],
    ],
    'ReservedInstancesListingList' => [
      'base' => NULL,
      'refs' => [
        'CancelReservedInstancesListingResult$ReservedInstancesListings' => '<p>The Reserved Instance listing.</p>',
        'CreateReservedInstancesListingResult$ReservedInstancesListings' => '<p>Information about the Reserved Instances listing.</p>',
        'DescribeReservedInstancesListingsResult$ReservedInstancesListings' => '<p>Information about the Reserved Instance listing.</p>',
      ],
    ],
    'ReservedInstancesModification' => [
      'base' => '<p>Describes a Reserved Instance modification.</p>',
      'refs' => [
        'ReservedInstancesModificationList$member' => NULL,
      ],
    ],
    'ReservedInstancesModificationIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesModificationsRequest$ReservedInstancesModificationIds' => '<p>IDs for the submitted modification request.</p>',
      ],
    ],
    'ReservedInstancesModificationList' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesModificationsResult$ReservedInstancesModifications' => '<p>The Reserved Instance modification information.</p>',
      ],
    ],
    'ReservedInstancesModificationResult' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstancesModificationResultList$member' => NULL,
      ],
    ],
    'ReservedInstancesModificationResultList' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstancesModification$ModificationResults' => '<p>Contains target configurations along with their corresponding new Reserved Instance IDs.</p>',
      ],
    ],
    'ReservedInstancesOffering' => [
      'base' => '<p>Describes a Reserved Instance offering.</p>',
      'refs' => [
        'ReservedInstancesOfferingList$member' => NULL,
      ],
    ],
    'ReservedInstancesOfferingIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesOfferingsRequest$ReservedInstancesOfferingIds' => '<p>One or more Reserved Instances offering IDs.</p>',
      ],
    ],
    'ReservedInstancesOfferingList' => [
      'base' => NULL,
      'refs' => [
        'DescribeReservedInstancesOfferingsResult$ReservedInstancesOfferings' => '<p>A list of Reserved Instances offerings.</p>',
      ],
    ],
    'ReservedIntancesIds' => [
      'base' => NULL,
      'refs' => [
        'ReservedInstancesModification$ReservedInstancesIds' => '<p>The IDs of one or more Reserved Instances.</p>',
      ],
    ],
    'ResetImageAttributeName' => [
      'base' => NULL,
      'refs' => [
        'ResetImageAttributeRequest$Attribute' => '<p>The attribute to reset (currently you can only reset the launch permission attribute].</p>',
      ],
    ],
    'ResetImageAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ResetInstanceAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ResetNetworkInterfaceAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ResetSnapshotAttributeRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ResourceIdList' => [
      'base' => NULL,
      'refs' => [
        'CreateTagsRequest$Resources' => '<p>The IDs of one or more resources to tag. For example, ami-1a2b3c4d.</p>',
        'DeleteTagsRequest$Resources' => '<p>The ID of the resource. For example, ami-1a2b3c4d. You can specify more than one resource ID.</p>',
      ],
    ],
    'ResourceType' => [
      'base' => NULL,
      'refs' => [
        'TagDescription$ResourceType' => '<p>The resource type.</p>',
      ],
    ],
    'RestorableByStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSnapshotsRequest$RestorableByUserIds' => '<p>One or more AWS accounts IDs that can create volumes from the snapshot.</p>',
      ],
    ],
    'RevokeSecurityGroupEgressRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RevokeSecurityGroupIngressRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Route' => [
      'base' => '<p>Describes a route in a route table.</p>',
      'refs' => [
        'RouteList$member' => NULL,
      ],
    ],
    'RouteList' => [
      'base' => NULL,
      'refs' => [
        'RouteTable$Routes' => '<p>The routes in the route table.</p>',
      ],
    ],
    'RouteOrigin' => [
      'base' => NULL,
      'refs' => [
        'Route$Origin' => '<p>Describes how the route was created.</p> <ul> <li> <code>CreateRouteTable</code> indicates that route was automatically created when the route table was created.</li> <li> <code>CreateRoute</code> indicates that the route was manually added to the route table.</li> <li> <code>EnableVgwRoutePropagation</code> indicates that the route was propagated by route propagation.</li> </ul>',
      ],
    ],
    'RouteState' => [
      'base' => NULL,
      'refs' => [
        'Route$State' => '<p>The state of the route. The <code>blackhole</code> state indicates that the route\'s target isn\'t available (for example, the specified gateway isn\'t attached to the VPC, or the specified NAT instance has been terminated].</p>',
      ],
    ],
    'RouteTable' => [
      'base' => '<p>Describes a route table.</p>',
      'refs' => [
        'CreateRouteTableResult$RouteTable' => '<p>Information about the route table.</p>',
        'RouteTableList$member' => NULL,
      ],
    ],
    'RouteTableAssociation' => [
      'base' => '<p>Describes an association between a route table and a subnet.</p>',
      'refs' => [
        'RouteTableAssociationList$member' => NULL,
      ],
    ],
    'RouteTableAssociationList' => [
      'base' => NULL,
      'refs' => [
        'RouteTable$Associations' => '<p>The associations between the route table and one or more subnets.</p>',
      ],
    ],
    'RouteTableList' => [
      'base' => NULL,
      'refs' => [
        'DescribeRouteTablesResult$RouteTables' => '<p>Information about one or more route tables.</p>',
      ],
    ],
    'RuleAction' => [
      'base' => NULL,
      'refs' => [
        'CreateNetworkAclEntryRequest$RuleAction' => '<p>Indicates whether to allow or deny the traffic that matches the rule.</p>',
        'NetworkAclEntry$RuleAction' => '<p>Indicates whether to allow or deny the traffic that matches the rule.</p>',
        'ReplaceNetworkAclEntryRequest$RuleAction' => '<p>Indicates whether to allow or deny the traffic that matches the rule.</p>',
      ],
    ],
    'RunInstancesMonitoringEnabled' => [
      'base' => '<p>Describes the monitoring for the instance.</p>',
      'refs' => [
        'LaunchSpecification$Monitoring' => NULL,
        'RunInstancesRequest$Monitoring' => '<p>The monitoring for the instance.</p>',
        'RequestSpotLaunchSpecification$Monitoring' => NULL,
      ],
    ],
    'RunInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'S3Storage' => [
      'base' => '<p>Describes the storage parameters for S3 and S3 buckets for an instance store-backed AMI.</p>',
      'refs' => [
        'Storage$S3' => '<p>An Amazon S3 storage location.</p>',
      ],
    ],
    'SecurityGroup' => [
      'base' => '<p>Describes a security group</p>',
      'refs' => [
        'SecurityGroupList$member' => NULL,
      ],
    ],
    'SecurityGroupIdStringList' => [
      'base' => NULL,
      'refs' => [
        'CreateNetworkInterfaceRequest$Groups' => '<p>The IDs of one or more security groups.</p>',
        'ImportInstanceLaunchSpecification$GroupIds' => '<p>One or more security group IDs.</p>',
        'InstanceNetworkInterfaceSpecification$Groups' => '<p>The IDs of the security groups for the network interface. Applies only if creating a network interface when launching an instance.</p>',
        'ModifyNetworkInterfaceAttributeRequest$Groups' => '<p>Changes the security groups for the network interface. The new set of groups you specify replaces the current set. You must specify at least one group, even if it\'s just the default security group in the VPC. You must specify the ID of the security group, not the name.</p>',
        'RunInstancesRequest$SecurityGroupIds' => '<p>One or more security group IDs. You can create a security group using <a>CreateSecurityGroup</a>.</p> <p>Default: Amazon EC2 uses the default security group.</p>',
      ],
    ],
    'SecurityGroupList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSecurityGroupsResult$SecurityGroups' => '<p>Information about one or more security groups.</p>',
      ],
    ],
    'SecurityGroupStringList' => [
      'base' => NULL,
      'refs' => [
        'ImportInstanceLaunchSpecification$GroupNames' => '<p>One or more security group names.</p>',
        'RunInstancesRequest$SecurityGroups' => '<p>[EC2-Classic, default VPC] One or more security group names. For a nondefault VPC, you must use security group IDs instead.</p> <p>Default: Amazon EC2 uses the default security group.</p>',
      ],
    ],
    'ShutdownBehavior' => [
      'base' => NULL,
      'refs' => [
        'ImportInstanceLaunchSpecification$InstanceInitiatedShutdownBehavior' => '<p>Indicates whether an instance stops or terminates when you initiate shutdown from the instance (using the operating system command for system shutdown].</p>',
        'RunInstancesRequest$InstanceInitiatedShutdownBehavior' => '<p>Indicates whether an instance stops or terminates when you initiate shutdown from the instance (using the operating system command for system shutdown].</p> <p>Default: <code>stop</code></p>',
      ],
    ],
    'Snapshot' => [
      'base' => '<p>Describes a snapshot.</p>',
      'refs' => [
        'SnapshotList$member' => NULL,
      ],
    ],
    'SnapshotAttributeName' => [
      'base' => NULL,
      'refs' => [
        'DescribeSnapshotAttributeRequest$Attribute' => '<p>The snapshot attribute you would like to view.</p>',
        'ModifySnapshotAttributeRequest$Attribute' => '<p>The snapshot attribute to modify.</p>',
        'ResetSnapshotAttributeRequest$Attribute' => '<p>The attribute to reset (currently only the attribute for permission to create volumes can be reset].</p>',
      ],
    ],
    'SnapshotIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSnapshotsRequest$SnapshotIds' => '<p>One or more snapshot IDs.</p> <p>Default: Describes snapshots for which you have launch permissions.</p>',
      ],
    ],
    'SnapshotList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSnapshotsResult$Snapshots' => NULL,
      ],
    ],
    'SnapshotState' => [
      'base' => NULL,
      'refs' => [
        'Snapshot$State' => '<p>The snapshot state.</p>',
      ],
    ],
    'SpotDatafeedSubscription' => [
      'base' => '<p>Describes the data feed for a Spot Instance.</p>',
      'refs' => [
        'CreateSpotDatafeedSubscriptionResult$SpotDatafeedSubscription' => '<p>The Spot Instance data feed subscription.</p>',
        'DescribeSpotDatafeedSubscriptionResult$SpotDatafeedSubscription' => '<p>The Spot Instance data feed subscription.</p>',
      ],
    ],
    'SpotInstanceRequest' => [
      'base' => '<p>Describe a Spot Instance request.</p>',
      'refs' => [
        'SpotInstanceRequestList$member' => NULL,
      ],
    ],
    'SpotInstanceRequestIdList' => [
      'base' => NULL,
      'refs' => [
        'CancelSpotInstanceRequestsRequest$SpotInstanceRequestIds' => '<p>One or more Spot Instance request IDs.</p>',
        'DescribeSpotInstanceRequestsRequest$SpotInstanceRequestIds' => '<p>One or more Spot Instance request IDs.</p>',
      ],
    ],
    'SpotInstanceRequestList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSpotInstanceRequestsResult$SpotInstanceRequests' => '<p>One or more Spot Instance requests.</p>',
        'RequestSpotInstancesResult$SpotInstanceRequests' => '<p>One or more Spot Instance requests.</p>',
      ],
    ],
    'SpotInstanceState' => [
      'base' => NULL,
      'refs' => [
        'SpotInstanceRequest$State' => '<p>The state of the Spot Instance request. Spot bid status information can help you track your Spot Instance requests. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-bid-status.html">Spot Bid Status</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
      ],
    ],
    'SpotInstanceStateFault' => [
      'base' => '<p>Describes a Spot Instance state change.</p>',
      'refs' => [
        'SpotDatafeedSubscription$Fault' => '<p>The fault codes for the Spot Instance request, if any.</p>',
        'SpotInstanceRequest$Fault' => '<p>The fault codes for the Spot Instance request, if any.</p>',
      ],
    ],
    'SpotInstanceStatus' => [
      'base' => '<p>Describes the status of a Spot Instance request.</p>',
      'refs' => [
        'SpotInstanceRequest$Status' => '<p>The status code and status message describing the Spot Instance request.</p>',
      ],
    ],
    'SpotInstanceType' => [
      'base' => NULL,
      'refs' => [
        'RequestSpotInstancesRequest$Type' => '<p>The Spot Instance request type.</p> <p>Default: <code>one-time</code></p>',
        'SpotInstanceRequest$Type' => '<p>The Spot Instance request type.</p>',
      ],
    ],
    'SpotPlacement' => [
      'base' => '<p>Describes Spot Instance placement.</p>',
      'refs' => [
        'LaunchSpecification$Placement' => '<p>The placement information for the instance.</p>',
        'RequestSpotLaunchSpecification$Placement' => '<p>The placement information for the instance.</p>',
      ],
    ],
    'SpotPrice' => [
      'base' => '<p>Describes the maximum hourly price (bid] for any Spot Instance launched to fulfill the request.</p>',
      'refs' => [
        'SpotPriceHistoryList$member' => NULL,
      ],
    ],
    'SpotPriceHistoryList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSpotPriceHistoryResult$SpotPriceHistory' => '<p>The historical Spot Prices.</p>',
      ],
    ],
    'StartInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'StartInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'StateReason' => [
      'base' => '<p>Describes a state change.</p>',
      'refs' => [
        'Image$StateReason' => '<p>The reason for the state change.</p>',
        'Instance$StateReason' => '<p>The reason for the most recent state transition.</p>',
      ],
    ],
    'StatusName' => [
      'base' => NULL,
      'refs' => [
        'InstanceStatusDetails$Name' => '<p>The type of instance status.</p>',
      ],
    ],
    'StatusType' => [
      'base' => NULL,
      'refs' => [
        'InstanceStatusDetails$Status' => '<p>The status.</p>',
      ],
    ],
    'StopInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'StopInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Storage' => [
      'base' => '<p>Describes the storage location for an instance store-backed AMI.</p>',
      'refs' => [
        'BundleInstanceRequest$Storage' => '<p>The bucket in which to store the AMI. You can specify a bucket that you already own or a new bucket that Amazon EC2 creates on your behalf. If you specify a bucket that belongs to someone else, Amazon EC2 returns an error.</p>',
        'BundleTask$Storage' => '<p>The Amazon S3 storage locations.</p>',
      ],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'AcceptVpcPeeringConnectionRequest$VpcPeeringConnectionId' => '<p>The ID of the VPC peering connection.</p>',
        'AccountAttribute$AttributeName' => '<p>The name of the account attribute.</p>',
        'AccountAttributeValue$AttributeValue' => '<p>The value of the attribute.</p>',
        'Address$InstanceId' => '<p>The ID of the instance the address is associated with (if any].</p>',
        'Address$PublicIp' => '<p>The Elastic IP address.</p>',
        'Address$AllocationId' => '<p>The ID representing the allocation of the address for use with EC2-VPC.</p>',
        'Address$AssociationId' => '<p>The ID representing the association of the address with an instance in a VPC.</p>',
        'Address$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'Address$NetworkInterfaceOwnerId' => '<p>The ID of the AWS account that owns the network interface.</p>',
        'Address$PrivateIpAddress' => '<p>The private IP address associated with the Elastic IP address.</p>',
        'AllocateAddressResult$PublicIp' => '<p>The Elastic IP address.</p>',
        'AllocateAddressResult$AllocationId' => '<p>[EC2-VPC] The ID that AWS assigns to represent the allocation of the Elastic IP address for use with instances in a VPC.</p>',
        'AllocationIdList$member' => NULL,
        'AssignPrivateIpAddressesRequest$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'AssociateAddressRequest$InstanceId' => '<p>The ID of the instance. This is required for EC2-Classic. For EC2-VPC, you can specify either the instance ID or the network interface ID, but not both. The operation fails if you specify an instance ID unless exactly one network interface is attached. </p>',
        'AssociateAddressRequest$PublicIp' => '<p>The Elastic IP address. This is required for EC2-Classic.</p>',
        'AssociateAddressRequest$AllocationId' => '<p>[EC2-VPC] The allocation ID. This is required for EC2-VPC.</p>',
        'AssociateAddressRequest$NetworkInterfaceId' => '<p>[EC2-VPC] The ID of the network interface. If the instance has more than one network interface, you must specify a network interface ID.</p>',
        'AssociateAddressRequest$PrivateIpAddress' => '<p>[EC2-VPC] The primary or secondary private IP address to associate with the Elastic IP address. If no private IP address is specified, the Elastic IP address is associated with the primary private IP address.</p>',
        'AssociateAddressResult$AssociationId' => '<p>[EC2-VPC] The ID that represents the association of the Elastic IP address with an instance.</p>',
        'AssociateDhcpOptionsRequest$DhcpOptionsId' => '<p>The ID of the DHCP options set, or <code>default</code> to associate no DHCP options with the VPC.</p>',
        'AssociateDhcpOptionsRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'AssociateRouteTableRequest$SubnetId' => '<p>The ID of the subnet.</p>',
        'AssociateRouteTableRequest$RouteTableId' => '<p>The ID of the route table.</p>',
        'AssociateRouteTableResult$AssociationId' => '<p>The route table association ID (needed to disassociate the route table].</p>',
        'AttachClassicLinkVpcRequest$InstanceId' => '<p>The ID of an EC2-Classic instance to link to the ClassicLink-enabled VPC.</p>',
        'AttachClassicLinkVpcRequest$VpcId' => '<p>The ID of a ClassicLink-enabled VPC.</p>',
        'AttachInternetGatewayRequest$InternetGatewayId' => '<p>The ID of the Internet gateway.</p>',
        'AttachInternetGatewayRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'AttachNetworkInterfaceRequest$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'AttachNetworkInterfaceRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'AttachNetworkInterfaceResult$AttachmentId' => '<p>The ID of the network interface attachment.</p>',
        'AttachVolumeRequest$VolumeId' => '<p>The ID of the Amazon EBS volume. The volume and instance must be within the same Availability Zone.</p>',
        'AttachVolumeRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'AttachVolumeRequest$Device' => '<p>The device name to expose to the instance (for example, <code>/dev/sdh</code> or <code>xvdh</code>].</p>',
        'AttachVpnGatewayRequest$VpnGatewayId' => '<p>The ID of the virtual private gateway.</p>',
        'AttachVpnGatewayRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'AttributeValue$Value' => '<p>Valid values are case-sensitive and vary by action.</p>',
        'AuthorizeSecurityGroupEgressRequest$GroupId' => '<p>The ID of the security group.</p>',
        'AuthorizeSecurityGroupEgressRequest$SourceSecurityGroupName' => '<p>[EC2-Classic, default VPC] The name of the destination security group. You can\'t specify a destination security group and a CIDR IP address range.</p>',
        'AuthorizeSecurityGroupEgressRequest$SourceSecurityGroupOwnerId' => '<p>The ID of the destination security group. You can\'t specify a destination security group and a CIDR IP address range.</p>',
        'AuthorizeSecurityGroupEgressRequest$IpProtocol' => '<p>The IP protocol name (<code>tcp</code>, <code>udp</code>, <code>icmp</code>] or number (see <a href="http://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml">Protocol Numbers</a>]. Use <code>-1</code> to specify all.</p>',
        'AuthorizeSecurityGroupEgressRequest$CidrIp' => '<p>The CIDR IP address range. You can\'t specify this parameter when specifying a source security group.</p>',
        'AuthorizeSecurityGroupIngressRequest$GroupName' => '<p>[EC2-Classic, default VPC] The name of the security group.</p>',
        'AuthorizeSecurityGroupIngressRequest$GroupId' => '<p>The ID of the security group.</p>',
        'AuthorizeSecurityGroupIngressRequest$SourceSecurityGroupName' => '<p>[EC2-Classic, default VPC] The name of the source security group. You can\'t specify a source security group and a CIDR IP address range.</p>',
        'AuthorizeSecurityGroupIngressRequest$SourceSecurityGroupOwnerId' => '<p>The ID of the source security group. You can\'t specify a source security group and a CIDR IP address range.</p>',
        'AuthorizeSecurityGroupIngressRequest$IpProtocol' => '<p>The IP protocol name (<code>tcp</code>, <code>udp</code>, <code>icmp</code>] or number (see <a href="http://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml">Protocol Numbers</a>]. (VPC only] Use <code>-1</code> to specify all.</p>',
        'AuthorizeSecurityGroupIngressRequest$CidrIp' => '<p>The CIDR IP address range. You can\'t specify this parameter when specifying a source security group.</p>',
        'AvailabilityZone$ZoneName' => '<p>The name of the Availability Zone.</p>',
        'AvailabilityZone$RegionName' => '<p>The name of the region.</p>',
        'AvailabilityZoneMessage$Message' => '<p>The message about the Availability Zone.</p>',
        'BlockDeviceMapping$VirtualName' => '<p>The virtual device name (<code>ephemeral</code>N]. Instance store volumes are numbered starting from 0. An instance type with 2 available instance store volumes can specify mappings for <code>ephemeral0</code> and <code>ephemeral1</code>.The number of available instance store volumes depends on the instance type. After you connect to the instance, you must mount the volume.</p> <p>Constraints: For M3 instances, you must specify instance store volumes in the block device mapping for the instance. When you launch an M3 instance, we ignore any instance store volumes specified in the block device mapping for the AMI.</p>',
        'BlockDeviceMapping$DeviceName' => '<p>The device name exposed to the instance (for example, <code>/dev/sdh</code>].</p>',
        'BlockDeviceMapping$NoDevice' => '<p>Suppresses the specified device included in the block device mapping of the AMI.</p>',
        'BundleIdStringList$member' => NULL,
        'BundleInstanceRequest$InstanceId' => '<p>The ID of the instance to bundle.</p> <p>Type: String</p> <p>Default: None</p> <p>Required: Yes</p>',
        'BundleTask$InstanceId' => '<p>The ID of the instance associated with this bundle task.</p>',
        'BundleTask$BundleId' => '<p>The ID of the bundle task.</p>',
        'BundleTask$Progress' => '<p>The level of task completion, as a percent (for example, 20%].</p>',
        'BundleTaskError$Code' => '<p>The error code.</p>',
        'BundleTaskError$Message' => '<p>The error message.</p>',
        'CancelBundleTaskRequest$BundleId' => '<p>The ID of the bundle task.</p>',
        'CancelConversionRequest$ConversionTaskId' => '<p>The ID of the conversion task.</p>',
        'CancelConversionRequest$ReasonMessage' => NULL,
        'CancelExportTaskRequest$ExportTaskId' => '<p>The ID of the export task. This is the ID returned by <code>CreateInstanceExportTask</code>.</p>',
        'CancelReservedInstancesListingRequest$ReservedInstancesListingId' => '<p>The ID of the Reserved Instance listing.</p>',
        'CancelledSpotInstanceRequest$SpotInstanceRequestId' => '<p>The ID of the Spot Instance request.</p>',
        'ClassicLinkInstance$InstanceId' => '<p>The ID of the instance.</p>',
        'ClassicLinkInstance$VpcId' => '<p>The ID of the VPC.</p>',
        'ConfirmProductInstanceRequest$ProductCode' => '<p>The product code. This must be a product code that you own.</p>',
        'ConfirmProductInstanceRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'ConfirmProductInstanceResult$OwnerId' => '<p>The AWS account ID of the instance owner. This is only present if the product code is attached to the instance.</p>',
        'ConversionIdStringList$member' => NULL,
        'ConversionTask$ConversionTaskId' => '<p>The ID of the conversion task.</p>',
        'ConversionTask$ExpirationTime' => '<p>The time when the task expires. If the upload isn\'t complete before the expiration time, we automatically cancel the task.</p>',
        'ConversionTask$StatusMessage' => '<p>The status message related to the conversion task.</p>',
        'CopyImageRequest$SourceRegion' => '<p>The name of the region that contains the AMI to copy.</p>',
        'CopyImageRequest$SourceImageId' => '<p>The ID of the AMI to copy.</p>',
        'CopyImageRequest$Name' => '<p>The name of the new AMI in the destination region.</p>',
        'CopyImageRequest$Description' => '<p>A description for the new AMI in the destination region.</p>',
        'CopyImageRequest$ClientToken' => '<p>Unique, case-sensitive identifier you provide to ensure idempotency of the request. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to Ensure Idempotency</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
        'CopyImageResult$ImageId' => '<p>The ID of the new AMI.</p>',
        'CopySnapshotRequest$SourceRegion' => '<p>The ID of the region that contains the snapshot to be copied.</p>',
        'CopySnapshotRequest$SourceSnapshotId' => '<p>The ID of the Amazon EBS snapshot to copy.</p>',
        'CopySnapshotRequest$Description' => '<p>A description for the new Amazon EBS snapshot.</p>',
        'CopySnapshotRequest$DestinationRegion' => '<p>The destination region of the snapshot copy operation. This parameter is required in the <code>PresignedUrl</code>.</p>',
        'CopySnapshotRequest$PresignedUrl' => '<p>The pre-signed URL that facilitates copying an encrypted snapshot. This parameter is only required when copying an encrypted snapshot with the Amazon EC2 Query API; it is available as an optional parameter in all other cases. The <code>PresignedUrl</code> should use the snapshot source endpoint, the <code>CopySnapshot</code> action, and include the <code>SourceRegion</code>, <code>SourceSnapshotId</code>, and <code>DestinationRegion</code> parameters. The <code>PresignedUrl</code> must be signed using AWS Signature Version 4. Because Amazon EBS snapshots are stored in Amazon S3, the signing algorithm for this parameter uses the same logic that is described in <a href="http://docs.aws.amazon.com/AmazonS3/latest/API/sigv4-query-string-auth.html">Authenticating Requests by Using Query Parameters (AWS Signature Version 4]</a> in the <i>Amazon Simple Storage Service API Reference</i>. An invalid or improperly signed <code>PresignedUrl</code> will cause the copy operation to fail asynchronously, and the snapshot will move to an <code>error</code> state.</p>',
        'CopySnapshotResult$SnapshotId' => '<p>The ID of the new snapshot.</p>',
        'CreateCustomerGatewayRequest$PublicIp' => '<p>The Internet-routable IP address for the customer gateway\'s outside interface. The address must be static.</p>',
        'CreateImageRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'CreateImageRequest$Name' => '<p>A name for the new image.</p> <p>Constraints: 3-128 alphanumeric characters, parentheses ((]], square brackets ([]], spaces ( ], periods (.], slashes (/], dashes (-], single quotes (\'], at-signs (@], or underscores(_]</p>',
        'CreateImageRequest$Description' => '<p>A description for the new image.</p>',
        'CreateImageResult$ImageId' => '<p>The ID of the new AMI.</p>',
        'CreateInstanceExportTaskRequest$Description' => '<p>A description for the conversion task or the resource being exported. The maximum length is 255 bytes.</p>',
        'CreateInstanceExportTaskRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'CreateKeyPairRequest$KeyName' => '<p>A unique name for the key pair.</p> <p>Constraints: Up to 255 ASCII characters</p>',
        'CreateNetworkAclEntryRequest$NetworkAclId' => '<p>The ID of the network ACL.</p>',
        'CreateNetworkAclEntryRequest$Protocol' => '<p>The protocol. A value of -1 means all protocols.</p>',
        'CreateNetworkAclEntryRequest$CidrBlock' => '<p>The network range to allow or deny, in CIDR notation (for example <code>172.16.0.0/24</code>].</p>',
        'CreateNetworkAclRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'CreateNetworkInterfaceRequest$SubnetId' => '<p>The ID of the subnet to associate with the network interface.</p>',
        'CreateNetworkInterfaceRequest$Description' => '<p>A description for the network interface.</p>',
        'CreateNetworkInterfaceRequest$PrivateIpAddress' => '<p>The primary private IP address of the network interface. If you don\'t specify an IP address, Amazon EC2 selects one for you from the subnet range. If you specify an IP address, you cannot indicate any IP addresses specified in <code>privateIpAddresses</code> as primary (only one IP address can be designated as primary].</p>',
        'CreatePlacementGroupRequest$GroupName' => '<p>A name for the placement group.</p> <p>Constraints: Up to 255 ASCII characters</p>',
        'CreateReservedInstancesListingRequest$ReservedInstancesId' => '<p>The ID of the active Reserved Instance.</p>',
        'CreateReservedInstancesListingRequest$ClientToken' => '<p>Unique, case-sensitive identifier you provide to ensure idempotency of your listings. This helps avoid duplicate listings. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">Ensuring Idempotency</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p>',
        'CreateRouteRequest$RouteTableId' => '<p>The ID of the route table for the route.</p>',
        'CreateRouteRequest$DestinationCidrBlock' => '<p>The CIDR address block used for the destination match. Routing decisions are based on the most specific match.</p>',
        'CreateRouteRequest$GatewayId' => '<p>The ID of an Internet gateway or virtual private gateway attached to your VPC.</p>',
        'CreateRouteRequest$InstanceId' => '<p>The ID of a NAT instance in your VPC. The operation fails if you specify an instance ID unless exactly one network interface is attached.</p>',
        'CreateRouteRequest$NetworkInterfaceId' => '<p>The ID of a network interface.</p>',
        'CreateRouteRequest$VpcPeeringConnectionId' => '<p>The ID of a VPC peering connection.</p>',
        'CreateRouteTableRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'CreateSecurityGroupRequest$GroupName' => '<p>The name of the security group.</p> <p>Constraints: Up to 255 characters in length</p> <p>Constraints for EC2-Classic: ASCII characters</p> <p>Constraints for EC2-VPC: a-z, A-Z, 0-9, spaces, and ._-:/(]#,@[]+=&amp;;{}!$*</p>',
        'CreateSecurityGroupRequest$Description' => '<p>A description for the security group. This is informational only.</p> <p>Constraints: Up to 255 characters in length</p> <p>Constraints for EC2-Classic: ASCII characters</p> <p>Constraints for EC2-VPC: a-z, A-Z, 0-9, spaces, and ._-:/(]#,@[]+=&amp;;{}!$*</p>',
        'CreateSecurityGroupRequest$VpcId' => '<p>[EC2-VPC] The ID of the VPC. Required for EC2-VPC.</p>',
        'CreateSecurityGroupResult$GroupId' => '<p>The ID of the security group.</p>',
        'CreateSnapshotRequest$VolumeId' => '<p>The ID of the Amazon EBS volume.</p>',
        'CreateSnapshotRequest$Description' => '<p>A description for the snapshot.</p>',
        'CreateSpotDatafeedSubscriptionRequest$Bucket' => '<p>The Amazon S3 bucket in which to store the Spot Instance data feed.</p>',
        'CreateSpotDatafeedSubscriptionRequest$Prefix' => '<p>A prefix for the data feed file names.</p>',
        'CreateSubnetRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'CreateSubnetRequest$CidrBlock' => '<p>The network range for the subnet, in CIDR notation. For example, <code>10.0.0.0/24</code>.</p>',
        'CreateSubnetRequest$AvailabilityZone' => '<p>The Availability Zone for the subnet.</p> <p>Default: Amazon EC2 selects one for you (recommended].</p>',
        'CreateVolumePermission$UserId' => '<p>The specific AWS account ID that is to be added or removed from a volume\'s list of create volume permissions.</p>',
        'CreateVolumeRequest$SnapshotId' => '<p>The snapshot from which to create the volume.</p>',
        'CreateVolumeRequest$AvailabilityZone' => '<p>The Availability Zone in which to create the volume. Use <a>DescribeAvailabilityZones</a> to list the Availability Zones that are currently available to you.</p>',
        'CreateVolumeRequest$KmsKeyId' => '<p>The full ARN of the AWS Key Management Service (KMS] master key to use when creating the encrypted volume. This parameter is only required if you want to use a non-default master key; if this parameter is not specified, the default master key is used. The ARN contains the <code>arn:aws:kms</code> namespace, followed by the region of the master key, the AWS account ID of the master key owner, the <code>key</code> namespace, and then the master key ID. For example, arn:aws:kms:<i>us-east-1</i>:<i>012345678910</i>:key/<i>abcd1234-a123-456a-a12b-a123b4cd56ef</i>.</p>',
        'CreateVpcPeeringConnectionRequest$VpcId' => '<p>The ID of the requester VPC.</p>',
        'CreateVpcPeeringConnectionRequest$PeerVpcId' => '<p>The ID of the VPC with which you are creating the VPC peering connection.</p>',
        'CreateVpcPeeringConnectionRequest$PeerOwnerId' => '<p>The AWS account ID of the owner of the peer VPC.</p> <p>Default: Your AWS account ID</p>',
        'CreateVpcRequest$CidrBlock' => '<p>The network range for the VPC, in CIDR notation. For example, <code>10.0.0.0/16</code>.</p>',
        'CreateVpnConnectionRequest$Type' => '<p>The type of VPN connection (<code>ipsec.1</code>].</p>',
        'CreateVpnConnectionRequest$CustomerGatewayId' => '<p>The ID of the customer gateway.</p>',
        'CreateVpnConnectionRequest$VpnGatewayId' => '<p>The ID of the virtual private gateway.</p>',
        'CreateVpnConnectionRouteRequest$VpnConnectionId' => '<p>The ID of the VPN connection.</p>',
        'CreateVpnConnectionRouteRequest$DestinationCidrBlock' => '<p>The CIDR block associated with the local subnet of the customer network.</p>',
        'CreateVpnGatewayRequest$AvailabilityZone' => '<p>The Availability Zone for the virtual private gateway.</p>',
        'CustomerGateway$CustomerGatewayId' => '<p>The ID of the customer gateway.</p>',
        'CustomerGateway$State' => '<p>The current state of the customer gateway (<code>pending | available | deleting | deleted</code>].</p>',
        'CustomerGateway$Type' => '<p>The type of VPN connection the customer gateway supports (<code>ipsec.1</code>].</p>',
        'CustomerGateway$IpAddress' => '<p>The Internet-routable IP address of the customer gateway\'s outside interface.</p>',
        'CustomerGateway$BgpAsn' => '<p>The customer gateway\'s Border Gateway Protocol (BGP] Autonomous System Number (ASN].</p>',
        'CustomerGatewayIdStringList$member' => NULL,
        'DeleteCustomerGatewayRequest$CustomerGatewayId' => '<p>The ID of the customer gateway.</p>',
        'DeleteDhcpOptionsRequest$DhcpOptionsId' => '<p>The ID of the DHCP options set.</p>',
        'DeleteInternetGatewayRequest$InternetGatewayId' => '<p>The ID of the Internet gateway.</p>',
        'DeleteKeyPairRequest$KeyName' => '<p>The name of the key pair.</p>',
        'DeleteNetworkAclEntryRequest$NetworkAclId' => '<p>The ID of the network ACL.</p>',
        'DeleteNetworkAclRequest$NetworkAclId' => '<p>The ID of the network ACL.</p>',
        'DeleteNetworkInterfaceRequest$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'DeletePlacementGroupRequest$GroupName' => '<p>The name of the placement group.</p>',
        'DeleteRouteRequest$RouteTableId' => '<p>The ID of the route table.</p>',
        'DeleteRouteRequest$DestinationCidrBlock' => '<p>The CIDR range for the route. The value you specify must match the CIDR for the route exactly.</p>',
        'DeleteRouteTableRequest$RouteTableId' => '<p>The ID of the route table.</p>',
        'DeleteSecurityGroupRequest$GroupName' => '<p>[EC2-Classic, default VPC] The name of the security group. You can specify either the security group name or the security group ID.</p>',
        'DeleteSecurityGroupRequest$GroupId' => '<p>The ID of the security group. Required for a nondefault VPC.</p>',
        'DeleteSnapshotRequest$SnapshotId' => '<p>The ID of the Amazon EBS snapshot.</p>',
        'DeleteSubnetRequest$SubnetId' => '<p>The ID of the subnet.</p>',
        'DeleteVolumeRequest$VolumeId' => '<p>The ID of the volume.</p>',
        'DeleteVpcPeeringConnectionRequest$VpcPeeringConnectionId' => '<p>The ID of the VPC peering connection.</p>',
        'DeleteVpcRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'DeleteVpnConnectionRequest$VpnConnectionId' => '<p>The ID of the VPN connection.</p>',
        'DeleteVpnConnectionRouteRequest$VpnConnectionId' => '<p>The ID of the VPN connection.</p>',
        'DeleteVpnConnectionRouteRequest$DestinationCidrBlock' => '<p>The CIDR block associated with the local subnet of the customer network.</p>',
        'DeleteVpnGatewayRequest$VpnGatewayId' => '<p>The ID of the virtual private gateway.</p>',
        'DeregisterImageRequest$ImageId' => '<p>The ID of the AMI.</p>',
        'DescribeClassicLinkInstancesRequest$NextToken' => '<p>The token for the next set of items to return. (You received this token from a prior call.]</p>',
        'DescribeClassicLinkInstancesResult$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'DescribeImageAttributeRequest$ImageId' => '<p>The ID of the AMI.</p>',
        'DescribeInstanceAttributeRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'DescribeInstanceStatusRequest$NextToken' => '<p>The next paginated set of results to return. (You received this token from a prior call.]</p>',
        'DescribeInstanceStatusResult$NextToken' => '<p>The next paginated set of results to return.</p>',
        'DescribeInstancesRequest$NextToken' => '<p>The token for the next set of items to return. (You received this token from a prior call.]</p>',
        'DescribeInstancesResult$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'DescribeNetworkInterfaceAttributeRequest$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'DescribeNetworkInterfaceAttributeResult$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'DescribeReservedInstancesListingsRequest$ReservedInstancesId' => '<p>One or more Reserved Instance IDs.</p>',
        'DescribeReservedInstancesListingsRequest$ReservedInstancesListingId' => '<p>One or more Reserved Instance Listing IDs.</p>',
        'DescribeReservedInstancesModificationsRequest$NextToken' => '<p>The token for the next page of data.</p>',
        'DescribeReservedInstancesModificationsResult$NextToken' => '<p>The token for the next page of data.</p>',
        'DescribeReservedInstancesOfferingsRequest$AvailabilityZone' => '<p>The Availability Zone in which the Reserved Instance can be used.</p>',
        'DescribeReservedInstancesOfferingsRequest$NextToken' => '<p>The token to use when requesting the next paginated set of offerings.</p>',
        'DescribeReservedInstancesOfferingsResult$NextToken' => '<p>The next paginated set of results to return.</p>',
        'DescribeSnapshotAttributeRequest$SnapshotId' => '<p>The ID of the Amazon EBS snapshot.</p>',
        'DescribeSnapshotAttributeResult$SnapshotId' => '<p>The ID of the Amazon EBS snapshot.</p>',
        'DescribeSpotPriceHistoryRequest$AvailabilityZone' => '<p>Filters the results by the specified Availability Zone.</p>',
        'DescribeSpotPriceHistoryRequest$NextToken' => '<p>The token for the next set of items. (You received this token from a prior call.]</p>',
        'DescribeSpotPriceHistoryResult$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'DescribeTagsRequest$NextToken' => '<p>The token for the next set of items to return. (You received this token from a prior call.]</p>',
        'DescribeTagsResult$NextToken' => '<p>The token to use when requesting the next set of items. If there are no additional items to return, the string is empty.</p>',
        'DescribeVolumeAttributeRequest$VolumeId' => '<p>The ID of the volume.</p>',
        'DescribeVolumeAttributeResult$VolumeId' => '<p>The ID of the volume.</p>',
        'DescribeVolumeStatusRequest$NextToken' => '<p>The next paginated set of results to return using the pagination token returned by a previous call.</p>',
        'DescribeVolumeStatusResult$NextToken' => '<p>The next paginated set of results to return.</p>',
        'DescribeVolumesRequest$NextToken' => '<p>The <code>NextToken</code> value returned from a previous paginated <code>DescribeVolumes</code> request where <code>MaxResults</code> was used and the results exceeded the value of that parameter. Pagination continues from the end of the previous results that returned the <code>NextToken</code> value. This value is <code>null</code> when there are no more results to return.</p>',
        'DescribeVolumesResult$NextToken' => '<p>The <code>NextToken</code> value to include in a future <code>DescribeVolumes</code> request. When the results of a <code>DescribeVolumes</code> request exceed <code>MaxResults</code>, this value can be used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>',
        'DescribeVpcAttributeRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'DescribeVpcAttributeResult$VpcId' => '<p>The ID of the VPC.</p>',
        'DetachClassicLinkVpcRequest$InstanceId' => '<p>The ID of the instance to unlink from the VPC.</p>',
        'DetachClassicLinkVpcRequest$VpcId' => '<p> The ID of the VPC to which the instance is linked.</p>',
        'DetachInternetGatewayRequest$InternetGatewayId' => '<p>The ID of the Internet gateway.</p>',
        'DetachInternetGatewayRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'DetachNetworkInterfaceRequest$AttachmentId' => '<p>The ID of the attachment.</p>',
        'DetachVolumeRequest$VolumeId' => '<p>The ID of the volume.</p>',
        'DetachVolumeRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'DetachVolumeRequest$Device' => '<p>The device name.</p>',
        'DetachVpnGatewayRequest$VpnGatewayId' => '<p>The ID of the virtual private gateway.</p>',
        'DetachVpnGatewayRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'DhcpConfiguration$Key' => '<p>The name of a DHCP option.</p>',
        'DhcpOptions$DhcpOptionsId' => '<p>The ID of the set of DHCP options.</p>',
        'DhcpOptionsIdStringList$member' => NULL,
        'DisableVgwRoutePropagationRequest$RouteTableId' => '<p>The ID of the route table.</p>',
        'DisableVgwRoutePropagationRequest$GatewayId' => '<p>The ID of the virtual private gateway.</p>',
        'DisableVpcClassicLinkRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'DisassociateAddressRequest$PublicIp' => '<p>[EC2-Classic] The Elastic IP address. Required for EC2-Classic.</p>',
        'DisassociateAddressRequest$AssociationId' => '<p>[EC2-VPC] The association ID. Required for EC2-VPC.</p>',
        'DisassociateRouteTableRequest$AssociationId' => '<p>The association ID representing the current association between the route table and subnet.</p>',
        'DiskImage$Description' => NULL,
        'DiskImageDescription$ImportManifestUrl' => '<p>A presigned URL for the import manifest stored in Amazon S3. For information about creating a presigned URL for an Amazon S3 object, read the "Query String Request Authentication Alternative" section of the <a href="http://docs.aws.amazon.com/AmazonS3/latest/dev/RESTAuthentication.html">Authenticating REST Requests</a> topic in the <i>Amazon Simple Storage Service Developer Guide</i>.</p>',
        'DiskImageDescription$Checksum' => '<p>The checksum computed for the disk image.</p>',
        'DiskImageDetail$ImportManifestUrl' => '<p>A presigned URL for the import manifest stored in Amazon S3 and presented here as an Amazon S3 presigned URL. For information about creating a presigned URL for an Amazon S3 object, read the "Query String Request Authentication Alternative" section of the <a href="http://docs.aws.amazon.com/AmazonS3/latest/dev/RESTAuthentication.html">Authenticating REST Requests</a> topic in the <i>Amazon Simple Storage Service Developer Guide</i>.</p>',
        'DiskImageVolumeDescription$Id' => '<p>The volume identifier.</p>',
        'EbsBlockDevice$SnapshotId' => '<p>The ID of the snapshot.</p>',
        'EbsInstanceBlockDevice$VolumeId' => '<p>The ID of the Amazon EBS volume.</p>',
        'EbsInstanceBlockDeviceSpecification$VolumeId' => '<p>The ID of the Amazon EBS volume.</p>',
        'EnableVgwRoutePropagationRequest$RouteTableId' => '<p>The ID of the route table.</p>',
        'EnableVgwRoutePropagationRequest$GatewayId' => '<p>The ID of the virtual private gateway.</p>',
        'EnableVolumeIORequest$VolumeId' => '<p>The ID of the volume.</p>',
        'EnableVpcClassicLinkRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'ExecutableByStringList$member' => NULL,
        'ExportTask$ExportTaskId' => '<p>The ID of the export task.</p>',
        'ExportTask$Description' => '<p>A description of the resource being exported.</p>',
        'ExportTask$StatusMessage' => '<p>The status message related to the export task.</p>',
        'ExportTaskIdStringList$member' => NULL,
        'ExportToS3Task$S3Bucket' => '<p>The Amazon S3 bucket for the destination image. The destination bucket must exist and grant WRITE and READ_ACL permissions to the AWS account <code>vm-import-export@amazon.com</code>.</p>',
        'ExportToS3Task$S3Key' => NULL,
        'ExportToS3TaskSpecification$S3Bucket' => NULL,
        'ExportToS3TaskSpecification$S3Prefix' => '<p>The image is written to a single object in the Amazon S3 bucket at the S3 key s3prefix + exportTaskId + \'.\' + diskImageFormat.</p>',
        'Filter$Name' => '<p>The name of the filter. Filter names are case-sensitive.</p>',
        'GetConsoleOutputRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'GetConsoleOutputResult$InstanceId' => '<p>The ID of the instance.</p>',
        'GetConsoleOutputResult$Output' => '<p>The console output, Base64 encoded.</p>',
        'GetPasswordDataRequest$InstanceId' => '<p>The ID of the Windows instance.</p>',
        'GetPasswordDataResult$InstanceId' => '<p>The ID of the Windows instance.</p>',
        'GetPasswordDataResult$PasswordData' => '<p>The password of the instance.</p>',
        'GroupIdStringList$member' => NULL,
        'GroupIdentifier$GroupName' => '<p>The name of the security group.</p>',
        'GroupIdentifier$GroupId' => '<p>The ID of the security group.</p>',
        'GroupNameStringList$member' => NULL,
        'IamInstanceProfile$Arn' => '<p>The Amazon Resource Name (ARN] of the instance profile.</p>',
        'IamInstanceProfile$Id' => '<p>The ID of the instance profile.</p>',
        'IamInstanceProfileSpecification$Arn' => '<p>The Amazon Resource Name (ARN] of the instance profile.</p>',
        'IamInstanceProfileSpecification$Name' => '<p>The name of the instance profile.</p>',
        'Image$ImageId' => '<p>The ID of the AMI.</p>',
        'Image$ImageLocation' => '<p>The location of the AMI.</p>',
        'Image$OwnerId' => '<p>The AWS account ID of the image owner.</p>',
        'Image$CreationDate' => '<p>The date and time the image was created.</p>',
        'Image$KernelId' => '<p>The kernel associated with the image, if any. Only applicable for machine images.</p>',
        'Image$RamdiskId' => '<p>The RAM disk associated with the image, if any. Only applicable for machine images.</p>',
        'Image$SriovNetSupport' => '<p>Specifies whether enhanced networking is enabled.</p>',
        'Image$ImageOwnerAlias' => '<p>The AWS account alias (for example, <code>amazon</code>, <code>self</code>] or the AWS account ID of the AMI owner.</p>',
        'Image$Name' => '<p>The name of the AMI that was provided during image creation.</p>',
        'Image$Description' => '<p>The description of the AMI that was provided during image creation.</p>',
        'Image$RootDeviceName' => '<p>The device name of the root device (for example, <filename>/dev/sda1</filename> or <filename>xvda</filename>].</p>',
        'ImageAttribute$ImageId' => '<p>The ID of the AMI.</p>',
        'ImageIdStringList$member' => NULL,
        'ImportInstanceLaunchSpecification$AdditionalInfo' => NULL,
        'ImportInstanceLaunchSpecification$SubnetId' => '<p>[EC2-VPC] The ID of the subnet to launch the instance into.</p>',
        'ImportInstanceLaunchSpecification$PrivateIpAddress' => '<p>[EC2-VPC] Optionally, you can use this parameter to assign the instance a specific available IP address from the IP address range of the subnet.</p>',
        'ImportInstanceRequest$Description' => '<p>A description for the instance being imported.</p>',
        'ImportInstanceTaskDetails$InstanceId' => NULL,
        'ImportInstanceTaskDetails$Description' => NULL,
        'ImportInstanceVolumeDetailItem$AvailabilityZone' => '<p>The Availability Zone where the resulting instance will reside.</p>',
        'ImportInstanceVolumeDetailItem$Status' => '<p>The status of the import of this particular disk image.</p>',
        'ImportInstanceVolumeDetailItem$StatusMessage' => '<p>The status information or errors related to the disk image.</p>',
        'ImportInstanceVolumeDetailItem$Description' => NULL,
        'ImportKeyPairRequest$KeyName' => '<p>A unique name for the key pair.</p>',
        'ImportKeyPairResult$KeyName' => '<p>The key pair name you provided.</p>',
        'ImportKeyPairResult$KeyFingerprint' => '<p>The MD5 public key fingerprint as specified in section 4 of RFC 4716.</p>',
        'ImportVolumeRequest$AvailabilityZone' => '<p>The Availability Zone for the resulting Amazon EBS volume.</p>',
        'ImportVolumeRequest$Description' => '<p>An optional description for the volume being imported.</p>',
        'ImportVolumeTaskDetails$AvailabilityZone' => '<p>The Availability Zone where the resulting volume will reside.</p>',
        'ImportVolumeTaskDetails$Description' => '<p>The description you provided when starting the import volume task.</p>',
        'Instance$InstanceId' => '<p>The ID of the instance.</p>',
        'Instance$ImageId' => '<p>The ID of the AMI used to launch the instance.</p>',
        'Instance$PrivateDnsName' => '<p>The private DNS name assigned to the instance. This DNS name can only be used inside the Amazon EC2 network. This name is not available until the instance enters the <code>running</code> state.</p>',
        'Instance$PublicDnsName' => '<p>The public DNS name assigned to the instance. This name is not available until the instance enters the <code>running</code> state.</p>',
        'Instance$StateTransitionReason' => '<p>The reason for the most recent state transition. This might be an empty string.</p>',
        'Instance$KeyName' => '<p>The name of the key pair, if this instance was launched with an associated key pair.</p>',
        'Instance$KernelId' => '<p>The kernel associated with this instance.</p>',
        'Instance$RamdiskId' => '<p>The RAM disk associated with this instance.</p>',
        'Instance$SubnetId' => '<p>The ID of the subnet in which the instance is running.</p>',
        'Instance$VpcId' => '<p>The ID of the VPC in which the instance is running.</p>',
        'Instance$PrivateIpAddress' => '<p>The private IP address assigned to the instance.</p>',
        'Instance$PublicIpAddress' => '<p>The public IP address assigned to the instance.</p>',
        'Instance$RootDeviceName' => '<p>The root device name (for example, <code>/dev/sda1</code>].</p>',
        'Instance$SpotInstanceRequestId' => '<p>The ID of the Spot Instance request.</p>',
        'Instance$ClientToken' => '<p>The idempotency token you provided when you launched the instance.</p>',
        'Instance$SriovNetSupport' => '<p>Specifies whether enhanced networking is enabled. </p>',
        'InstanceAttribute$InstanceId' => '<p>The ID of the instance.</p>',
        'InstanceBlockDeviceMapping$DeviceName' => '<p>The device name exposed to the instance (for example, <filename>/dev/sdh</filename>].</p>',
        'InstanceBlockDeviceMappingSpecification$DeviceName' => '<p>The device name exposed to the instance (for example, <filename>/dev/sdh</filename>].</p>',
        'InstanceBlockDeviceMappingSpecification$VirtualName' => '<p>The virtual device name.</p>',
        'InstanceBlockDeviceMappingSpecification$NoDevice' => '<p>suppress the specified device included in the block device mapping.</p>',
        'InstanceExportDetails$InstanceId' => '<p>The ID of the resource being exported.</p>',
        'InstanceIdStringList$member' => NULL,
        'InstanceMonitoring$InstanceId' => '<p>The ID of the instance.</p>',
        'InstanceNetworkInterface$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'InstanceNetworkInterface$SubnetId' => '<p>The ID of the subnet.</p>',
        'InstanceNetworkInterface$VpcId' => '<p>The ID of the VPC.</p>',
        'InstanceNetworkInterface$Description' => '<p>The description.</p>',
        'InstanceNetworkInterface$OwnerId' => '<p>The ID of the AWS account that created the network interface.</p>',
        'InstanceNetworkInterface$MacAddress' => '<p>The MAC address.</p>',
        'InstanceNetworkInterface$PrivateIpAddress' => '<p>The IP address of the network interface within the subnet.</p>',
        'InstanceNetworkInterface$PrivateDnsName' => '<p>The private DNS name.</p>',
        'InstanceNetworkInterfaceAssociation$PublicIp' => '<p>The public IP address or Elastic IP address bound to the network interface.</p>',
        'InstanceNetworkInterfaceAssociation$PublicDnsName' => '<p>The public DNS name.</p>',
        'InstanceNetworkInterfaceAssociation$IpOwnerId' => '<p>The ID of the owner of the Elastic IP address.</p>',
        'InstanceNetworkInterfaceAttachment$AttachmentId' => '<p>The ID of the network interface attachment.</p>',
        'InstanceNetworkInterfaceSpecification$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'InstanceNetworkInterfaceSpecification$SubnetId' => '<p>The ID of the subnet associated with the network string. Applies only if creating a network interface when launching an instance.</p>',
        'InstanceNetworkInterfaceSpecification$Description' => '<p>The description of the network interface. Applies only if creating a network interface when launching an instance.</p>',
        'InstanceNetworkInterfaceSpecification$PrivateIpAddress' => '<p>The private IP address of the network interface. Applies only if creating a network interface when launching an instance.</p>',
        'InstancePrivateIpAddress$PrivateIpAddress' => '<p>The private IP address of the network interface.</p>',
        'InstancePrivateIpAddress$PrivateDnsName' => '<p>The private DNS name.</p>',
        'InstanceStateChange$InstanceId' => '<p>The ID of the instance.</p>',
        'InstanceStatus$InstanceId' => '<p>The ID of the instance.</p>',
        'InstanceStatus$AvailabilityZone' => '<p>The Availability Zone of the instance.</p>',
        'InstanceStatusEvent$Description' => '<p>A description of the event.</p>',
        'InternetGateway$InternetGatewayId' => '<p>The ID of the Internet gateway.</p>',
        'InternetGatewayAttachment$VpcId' => '<p>The ID of the VPC.</p>',
        'IpPermission$IpProtocol' => '<p>The protocol.</p> <p>When you call <a>DescribeSecurityGroups</a>, the protocol value returned is the number. Exception: For TCP, UDP, and ICMP, the value returned is the name (for example, <code>tcp</code>, <code>udp</code>, or <code>icmp</code>]. For a list of protocol numbers, see <a href="http://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml">Protocol Numbers</a>.</p>',
        'IpRange$CidrIp' => '<p>The CIDR range. You can either specify a CIDR range or a source security group, not both.</p>',
        'KeyNameStringList$member' => NULL,
        'KeyPair$KeyName' => '<p>The name of the key pair.</p>',
        'KeyPair$KeyFingerprint' => '<p>The SHA-1 digest of the DER encoded private key.</p>',
        'KeyPair$KeyMaterial' => '<p>An unencrypted PEM encoded RSA private key.</p>',
        'KeyPairInfo$KeyName' => '<p>The name of the key pair.</p>',
        'KeyPairInfo$KeyFingerprint' => '<p>If you used <a>CreateKeyPair</a> to create the key pair, this is the SHA-1 digest of the DER encoded private key. If you used <a>ImportKeyPair</a> to provide AWS the public key, this is the MD5 public key fingerprint as specified in section 4 of RFC4716.</p>',
        'LaunchPermission$UserId' => '<p>The AWS account ID.</p>',
        'LaunchSpecification$ImageId' => '<p>The ID of the AMI.</p>',
        'LaunchSpecification$KeyName' => '<p>The name of the key pair.</p>',
        'LaunchSpecification$UserData' => '<p>The Base64-encoded MIME user data to make available to the instances.</p>',
        'LaunchSpecification$AddressingType' => '<p>Deprecated.</p>',
        'LaunchSpecification$KernelId' => '<p>The ID of the kernel.</p>',
        'LaunchSpecification$RamdiskId' => '<p>The ID of the RAM disk.</p>',
        'LaunchSpecification$SubnetId' => '<p>The ID of the subnet in which to launch the instance.</p>',
        'ModifyImageAttributeRequest$ImageId' => '<p>The ID of the AMI.</p>',
        'ModifyImageAttributeRequest$Attribute' => '<p>The name of the attribute to modify.</p>',
        'ModifyImageAttributeRequest$OperationType' => '<p>The operation type.</p>',
        'ModifyImageAttributeRequest$Value' => '<p>The value of the attribute being modified. This is only valid when modifying the <code>description</code> attribute.</p>',
        'ModifyInstanceAttributeRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'ModifyInstanceAttributeRequest$Value' => '<p>A new value for the attribute. Use only with the <code>kernel</code>, <code>ramdisk</code>, <code>userData</code>, <code>disableApiTermination</code>, or <code>intanceInitiateShutdownBehavior</code> attribute.</p>',
        'ModifyNetworkInterfaceAttributeRequest$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'ModifyReservedInstancesRequest$ClientToken' => '<p>A unique, case-sensitive token you provide to ensure idempotency of your modification request.</p>',
        'ModifyReservedInstancesResult$ReservedInstancesModificationId' => '<p>The ID for the modification.</p>',
        'ModifySnapshotAttributeRequest$SnapshotId' => '<p>The ID of the snapshot.</p>',
        'ModifySnapshotAttributeRequest$OperationType' => '<p>The type of operation to perform to the attribute.</p>',
        'ModifySubnetAttributeRequest$SubnetId' => '<p>The ID of the subnet.</p>',
        'ModifyVolumeAttributeRequest$VolumeId' => '<p>The ID of the volume.</p>',
        'ModifyVpcAttributeRequest$VpcId' => '<p>The ID of the VPC.</p>',
        'NetworkAcl$NetworkAclId' => '<p>The ID of the network ACL.</p>',
        'NetworkAcl$VpcId' => '<p>The ID of the VPC for the network ACL.</p>',
        'NetworkAclAssociation$NetworkAclAssociationId' => '<p>The ID of the association between a network ACL and a subnet.</p>',
        'NetworkAclAssociation$NetworkAclId' => '<p>The ID of the network ACL.</p>',
        'NetworkAclAssociation$SubnetId' => '<p>The ID of the subnet.</p>',
        'NetworkAclEntry$Protocol' => '<p>The protocol. A value of <code>-1</code> means all protocols.</p>',
        'NetworkAclEntry$CidrBlock' => '<p>The network range to allow or deny, in CIDR notation.</p>',
        'NetworkInterface$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'NetworkInterface$SubnetId' => '<p>The ID of the subnet.</p>',
        'NetworkInterface$VpcId' => '<p>The ID of the VPC.</p>',
        'NetworkInterface$AvailabilityZone' => '<p>The Availability Zone.</p>',
        'NetworkInterface$Description' => '<p>A description.</p>',
        'NetworkInterface$OwnerId' => '<p>The AWS account ID of the owner of the network interface.</p>',
        'NetworkInterface$RequesterId' => '<p>The ID of the entity that launched the instance on your behalf (for example, AWS Management Console or Auto Scaling].</p>',
        'NetworkInterface$MacAddress' => '<p>The MAC address.</p>',
        'NetworkInterface$PrivateIpAddress' => '<p>The IP address of the network interface within the subnet.</p>',
        'NetworkInterface$PrivateDnsName' => '<p>The private DNS name.</p>',
        'NetworkInterfaceAssociation$PublicIp' => '<p>The address of the Elastic IP address bound to the network interface.</p>',
        'NetworkInterfaceAssociation$PublicDnsName' => '<p>The public DNS name.</p>',
        'NetworkInterfaceAssociation$IpOwnerId' => '<p>The ID of the Elastic IP address owner.</p>',
        'NetworkInterfaceAssociation$AllocationId' => '<p>The allocation ID.</p>',
        'NetworkInterfaceAssociation$AssociationId' => '<p>The association ID.</p>',
        'NetworkInterfaceAttachment$AttachmentId' => '<p>The ID of the network interface attachment.</p>',
        'NetworkInterfaceAttachment$InstanceId' => '<p>The ID of the instance.</p>',
        'NetworkInterfaceAttachment$InstanceOwnerId' => '<p>The AWS account ID of the owner of the instance.</p>',
        'NetworkInterfaceAttachmentChanges$AttachmentId' => '<p>The ID of the network interface attachment.</p>',
        'NetworkInterfaceIdList$member' => NULL,
        'NetworkInterfacePrivateIpAddress$PrivateIpAddress' => '<p>The private IP address.</p>',
        'NetworkInterfacePrivateIpAddress$PrivateDnsName' => '<p>The private DNS name.</p>',
        'OwnerStringList$member' => NULL,
        'Placement$AvailabilityZone' => '<p>The Availability Zone of the instance.</p>',
        'Placement$GroupName' => '<p>The name of the placement group the instance is in (for cluster compute instances].</p>',
        'PlacementGroup$GroupName' => '<p>The name of the placement group.</p>',
        'PlacementGroupStringList$member' => NULL,
        'PrivateIpAddressSpecification$PrivateIpAddress' => '<p>The private IP addresses.</p>',
        'PrivateIpAddressStringList$member' => NULL,
        'ProductCode$ProductCodeId' => '<p>The product code.</p>',
        'ProductCodeStringList$member' => NULL,
        'ProductDescriptionList$member' => NULL,
        'PropagatingVgw$GatewayId' => '<p>The ID of the virtual private gateway (VGW].</p>',
        'PublicIpStringList$member' => NULL,
        'PurchaseReservedInstancesOfferingRequest$ReservedInstancesOfferingId' => '<p>The ID of the Reserved Instance offering to purchase.</p>',
        'PurchaseReservedInstancesOfferingResult$ReservedInstancesId' => '<p>The IDs of the purchased Reserved Instances.</p>',
        'Region$RegionName' => '<p>The name of the region.</p>',
        'Region$Endpoint' => '<p>The region service endpoint.</p>',
        'RegionNameStringList$member' => NULL,
        'RegisterImageRequest$ImageLocation' => '<p>The full path to your AMI manifest in Amazon S3 storage.</p>',
        'RegisterImageRequest$Name' => '<p>A name for your AMI.</p> <p>Constraints: 3-128 alphanumeric characters, parentheses ((]], square brackets ([]], spaces ( ], periods (.], slashes (/], dashes (-], single quotes (\'], at-signs (@], or underscores(_]</p>',
        'RegisterImageRequest$Description' => '<p>A description for your AMI.</p>',
        'RegisterImageRequest$KernelId' => '<p>The ID of the kernel.</p>',
        'RegisterImageRequest$RamdiskId' => '<p>The ID of the RAM disk.</p>',
        'RegisterImageRequest$RootDeviceName' => '<p>The name of the root device (for example, <code>/dev/sda1</code>, or <code>xvda</code>].</p>',
        'RegisterImageRequest$VirtualizationType' => '<p>The type of virtualization.</p> <p>Default: <code>paravirtual</code></p>',
        'RegisterImageRequest$SriovNetSupport' => '<p>Set to <code>simple</code> to enable enhanced networking for the AMI and any instances that you launch from the AMI.</p> <p>There is no way to disable enhanced networking at this time.</p> <p>This option is supported only for HVM AMIs. Specifying this option with a PV AMI can make instances launched from the AMI unreachable.</p>',
        'RegisterImageResult$ImageId' => '<p>The ID of the newly registered AMI.</p>',
        'RejectVpcPeeringConnectionRequest$VpcPeeringConnectionId' => '<p>The ID of the VPC peering connection.</p>',
        'ReleaseAddressRequest$PublicIp' => '<p>[EC2-Classic] The Elastic IP address. Required for EC2-Classic.</p>',
        'ReleaseAddressRequest$AllocationId' => '<p>[EC2-VPC] The allocation ID. Required for EC2-VPC.</p>',
        'ReplaceNetworkAclAssociationRequest$AssociationId' => '<p>The ID of the current association between the original network ACL and the subnet.</p>',
        'ReplaceNetworkAclAssociationRequest$NetworkAclId' => '<p>The ID of the new network ACL to associate with the subnet.</p>',
        'ReplaceNetworkAclAssociationResult$NewAssociationId' => '<p>The ID of the new association.</p>',
        'ReplaceNetworkAclEntryRequest$NetworkAclId' => '<p>The ID of the ACL.</p>',
        'ReplaceNetworkAclEntryRequest$Protocol' => '<p>The IP protocol. You can specify <code>all</code> or <code>-1</code> to mean all protocols.</p>',
        'ReplaceNetworkAclEntryRequest$CidrBlock' => '<p>The network range to allow or deny, in CIDR notation.</p>',
        'ReplaceRouteRequest$RouteTableId' => '<p>The ID of the route table.</p>',
        'ReplaceRouteRequest$DestinationCidrBlock' => '<p>The CIDR address block used for the destination match. The value you provide must match the CIDR of an existing route in the table.</p>',
        'ReplaceRouteRequest$GatewayId' => '<p>The ID of an Internet gateway or virtual private gateway.</p>',
        'ReplaceRouteRequest$InstanceId' => '<p>The ID of a NAT instance in your VPC.</p>',
        'ReplaceRouteRequest$NetworkInterfaceId' => '<p>The ID of a network interface.</p>',
        'ReplaceRouteRequest$VpcPeeringConnectionId' => '<p>The ID of a VPC peering connection.</p>',
        'ReplaceRouteTableAssociationRequest$AssociationId' => '<p>The association ID.</p>',
        'ReplaceRouteTableAssociationRequest$RouteTableId' => '<p>The ID of the new route table to associate with the subnet.</p>',
        'ReplaceRouteTableAssociationResult$NewAssociationId' => '<p>The ID of the new association.</p>',
        'ReportInstanceStatusRequest$Description' => '<p>Descriptive text about the health state of your instance.</p>',
        'RequestSpotInstancesRequest$SpotPrice' => '<p>The maximum hourly price (bid] for any Spot Instance launched to fulfill the request.</p>',
        'RequestSpotInstancesRequest$LaunchGroup' => '<p>The instance launch group. Launch groups are Spot Instances that launch together and terminate together.</p> <p>Default: Instances are launched and terminated individually</p>',
        'RequestSpotInstancesRequest$AvailabilityZoneGroup' => '<p>The user-specified name for a logical grouping of bids.</p> <p>When you specify an Availability Zone group in a Spot Instance request, all Spot Instances in the request are launched in the same Availability Zone. Instance proximity is maintained with this parameter, but the choice of Availability Zone is not. The group applies only to bids for Spot Instances of the same instance type. Any additional Spot Instance requests that are specified with the same Availability Zone group name are launched in that same Availability Zone, as long as at least one instance from the group is still active.</p> <p>If there is no active instance running in the Availability Zone group that you specify for a new Spot Instance request (all instances are terminated, the bid is expired, or the bid falls below current market], then Amazon EC2 launches the instance in any Availability Zone where the constraint can be met. Consequently, the subsequent set of Spot Instances could be placed in a different zone from the original request, even if you specified the same Availability Zone group.</p> <p>Default: Instances are launched in any available Availability Zone.</p>',
        'Reservation$ReservationId' => '<p>The ID of the reservation.</p>',
        'Reservation$OwnerId' => '<p>The ID of the AWS account that owns the reservation.</p>',
        'Reservation$RequesterId' => '<p>The ID of the requester that launched the instances on your behalf (for example, AWS Management Console or Auto Scaling].</p>',
        'ReservedInstances$ReservedInstancesId' => '<p>The ID of the Reserved Instance.</p>',
        'ReservedInstances$AvailabilityZone' => '<p>The Availability Zone in which the Reserved Instance can be used.</p>',
        'ReservedInstancesConfiguration$AvailabilityZone' => '<p>The Availability Zone for the modified Reserved Instances.</p>',
        'ReservedInstancesConfiguration$Platform' => '<p>The network platform of the modified Reserved Instances, which is either EC2-Classic or EC2-VPC.</p>',
        'ReservedInstancesId$ReservedInstancesId' => '<p>The ID of the Reserved Instance.</p>',
        'ReservedInstancesIdStringList$member' => NULL,
        'ReservedInstancesListing$ReservedInstancesListingId' => '<p>The ID of the Reserved Instance listing.</p>',
        'ReservedInstancesListing$ReservedInstancesId' => '<p>The ID of the Reserved Instance.</p>',
        'ReservedInstancesListing$StatusMessage' => '<p>The reason for the current status of the Reserved Instance listing. The response can be blank.</p>',
        'ReservedInstancesListing$ClientToken' => '<p>The idempotency token you provided when you created the listing.</p>',
        'ReservedInstancesModification$ReservedInstancesModificationId' => '<p>A unique ID for the Reserved Instance modification.</p>',
        'ReservedInstancesModification$Status' => '<p>The status of the Reserved Instances modification request.</p>',
        'ReservedInstancesModification$StatusMessage' => '<p>The reason for the status.</p>',
        'ReservedInstancesModification$ClientToken' => '<p>A unique, case-sensitive key supplied by the client to ensure that the modification request is idempotent.</p>',
        'ReservedInstancesModificationIdStringList$member' => NULL,
        'ReservedInstancesModificationResult$ReservedInstancesId' => '<p>The ID for the Reserved Instances that were created as part of the modification request. This field is only available when the modification is fulfilled.</p>',
        'ReservedInstancesOffering$ReservedInstancesOfferingId' => '<p>The ID of the Reserved Instance offering.</p>',
        'ReservedInstancesOffering$AvailabilityZone' => '<p>The Availability Zone in which the Reserved Instance can be used.</p>',
        'ReservedInstancesOfferingIdStringList$member' => NULL,
        'ResetImageAttributeRequest$ImageId' => '<p>The ID of the AMI.</p>',
        'ResetInstanceAttributeRequest$InstanceId' => '<p>The ID of the instance.</p>',
        'ResetNetworkInterfaceAttributeRequest$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'ResetNetworkInterfaceAttributeRequest$SourceDestCheck' => '<p>The source/destination checking attribute. Resets the value to <code>true</code>.</p>',
        'ResetSnapshotAttributeRequest$SnapshotId' => '<p>The ID of the snapshot.</p>',
        'ResourceIdList$member' => NULL,
        'RestorableByStringList$member' => NULL,
        'RevokeSecurityGroupEgressRequest$GroupId' => '<p>The ID of the security group.</p>',
        'RevokeSecurityGroupEgressRequest$SourceSecurityGroupName' => '<p>[EC2-Classic, default VPC] The name of the destination security group. You can\'t specify a destination security group and a CIDR IP address range.</p>',
        'RevokeSecurityGroupEgressRequest$SourceSecurityGroupOwnerId' => '<p>The ID of the destination security group. You can\'t specify a destination security group and a CIDR IP address range.</p>',
        'RevokeSecurityGroupEgressRequest$IpProtocol' => '<p>The IP protocol name (<code>tcp</code>, <code>udp</code>, <code>icmp</code>] or number (see <a href="http://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml">Protocol Numbers</a>]. Use <code>-1</code> to specify all.</p>',
        'RevokeSecurityGroupEgressRequest$CidrIp' => '<p>The CIDR IP address range. You can\'t specify this parameter when specifying a source security group.</p>',
        'RevokeSecurityGroupIngressRequest$GroupName' => '<p>[EC2-Classic, default VPC] The name of the security group.</p>',
        'RevokeSecurityGroupIngressRequest$GroupId' => '<p>The ID of the security group.</p>',
        'RevokeSecurityGroupIngressRequest$SourceSecurityGroupName' => '<p>[EC2-Classic, default VPC] The name of the source security group. You can\'t specify a source security group and a CIDR IP address range.</p>',
        'RevokeSecurityGroupIngressRequest$SourceSecurityGroupOwnerId' => '<p>The ID of the source security group. You can\'t specify a source security group and a CIDR IP address range.</p>',
        'RevokeSecurityGroupIngressRequest$IpProtocol' => '<p>The IP protocol name (<code>tcp</code>, <code>udp</code>, <code>icmp</code>] or number (see <a href="http://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml">Protocol Numbers</a>]. Use <code>-1</code> to specify all.</p>',
        'RevokeSecurityGroupIngressRequest$CidrIp' => '<p>The CIDR IP address range. You can\'t specify this parameter when specifying a source security group.</p>',
        'Route$DestinationCidrBlock' => '<p>The CIDR block used for the destination match.</p>',
        'Route$GatewayId' => '<p>The ID of a gateway attached to your VPC.</p>',
        'Route$InstanceId' => '<p>The ID of a NAT instance in your VPC.</p>',
        'Route$InstanceOwnerId' => '<p>The AWS account ID of the owner of the instance.</p>',
        'Route$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'Route$VpcPeeringConnectionId' => '<p>The ID of the VPC peering connection.</p>',
        'RouteTable$RouteTableId' => '<p>The ID of the route table.</p>',
        'RouteTable$VpcId' => '<p>The ID of the VPC.</p>',
        'RouteTableAssociation$RouteTableAssociationId' => '<p>The ID of the association between a route table and a subnet.</p>',
        'RouteTableAssociation$RouteTableId' => '<p>The ID of the route table.</p>',
        'RouteTableAssociation$SubnetId' => '<p>The ID of the subnet.</p>',
        'RunInstancesRequest$ImageId' => '<p>The ID of the AMI, which you can get by calling <a>DescribeImages</a>.</p>',
        'RunInstancesRequest$KeyName' => '<p>The name of the key pair. You can create a key pair using <a>CreateKeyPair</a> or <a>ImportKeyPair</a>.</p> <important> <p>If you launch an instance without specifying a key pair, you can\'t connect to the instance.</p> </important>',
        'RunInstancesRequest$UserData' => '<p>The Base64-encoded MIME user data for the instances.</p>',
        'RunInstancesRequest$KernelId' => '<p>The ID of the kernel.</p> <important> <p>We recommend that you use PV-GRUB instead of kernels and RAM disks. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/UserProvidedkernels.html"> PV-GRUB</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> </important>',
        'RunInstancesRequest$RamdiskId' => '<p>The ID of the RAM disk.</p> <important> <p>We recommend that you use PV-GRUB instead of kernels and RAM disks. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/UserProvidedkernels.html"> PV-GRUB</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> </important>',
        'RunInstancesRequest$SubnetId' => '<p>[EC2-VPC] The ID of the subnet to launch the instance into.</p>',
        'RunInstancesRequest$PrivateIpAddress' => '<p>[EC2-VPC] The primary IP address. You must specify a value from the IP address range of the subnet.</p> <p>Only one private IP address can be designated as primary. Therefore, you can\'t specify this parameter if <code>PrivateIpAddresses.n.Primary</code> is set to <code>true</code> and <code>PrivateIpAddresses.n.PrivateIpAddress</code> is set to an IP address. </p> <p>Default: We select an IP address from the IP address range of the subnet.</p>',
        'RunInstancesRequest$ClientToken' => '<p>Unique, case-sensitive identifier you provide to ensure the idempotency of the request. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to Ensure Idempotency</a> in the <i>Amazon Elastic Compute Cloud User Guide for Linux</i>.</p> <p>Constraints: Maximum 64 ASCII characters</p>',
        'RunInstancesRequest$AdditionalInfo' => '<p>Reserved.</p>',
        'S3Storage$Bucket' => '<p>The bucket in which to store the AMI. You can specify a bucket that you already own or a new bucket that Amazon EC2 creates on your behalf. If you specify a bucket that belongs to someone else, Amazon EC2 returns an error.</p>',
        'S3Storage$Prefix' => '<p>The beginning of the file name of the AMI.</p>',
        'S3Storage$AWSAccessKeyId' => '<p>The access key ID of the owner of the bucket. Before you specify a value for your access key ID, review and follow the guidance in <a href="http://docs.aws.amazon.com/general/latest/gr/aws-access-keys-best-practices.html">Best Practices for Managing AWS Access Keys</a>.</p>',
        'S3Storage$UploadPolicySignature' => '<p>The signature of the Base64 encoded JSON document.</p>',
        'SecurityGroup$OwnerId' => '<p>The AWS account ID of the owner of the security group.</p>',
        'SecurityGroup$GroupName' => '<p>The name of the security group.</p>',
        'SecurityGroup$GroupId' => '<p>The ID of the security group.</p>',
        'SecurityGroup$Description' => '<p>A description of the security group.</p>',
        'SecurityGroup$VpcId' => '<p>[EC2-VPC] The ID of the VPC for the security group.</p>',
        'SecurityGroupIdStringList$member' => NULL,
        'SecurityGroupStringList$member' => NULL,
        'Snapshot$SnapshotId' => '<p>The ID of the snapshot.</p>',
        'Snapshot$VolumeId' => '<p>The ID of the volume.</p>',
        'Snapshot$Progress' => '<p>The progress of the snapshot, as a percentage.</p>',
        'Snapshot$OwnerId' => '<p>The AWS account ID of the Amazon EBS snapshot owner.</p>',
        'Snapshot$Description' => '<p>The description for the snapshot.</p>',
        'Snapshot$OwnerAlias' => '<p>The AWS account alias (for example, <code>amazon</code>, <code>self</code>] or AWS account ID that owns the snapshot.</p>',
        'Snapshot$KmsKeyId' => '<p>The full ARN of the AWS Key Management Service (KMS] master key that was used to protect the volume encryption key for the parent volume.</p>',
        'SnapshotIdStringList$member' => NULL,
        'SpotDatafeedSubscription$OwnerId' => '<p>The AWS account ID of the account.</p>',
        'SpotDatafeedSubscription$Bucket' => '<p>The Amazon S3 bucket where the Spot Instance data feed is located.</p>',
        'SpotDatafeedSubscription$Prefix' => '<p>The prefix that is prepended to data feed files.</p>',
        'SpotInstanceRequest$SpotInstanceRequestId' => '<p>The ID of the Spot Instance request.</p>',
        'SpotInstanceRequest$SpotPrice' => '<p>The maximum hourly price (bid] for any Spot Instance launched to fulfill the request.</p>',
        'SpotInstanceRequest$LaunchGroup' => '<p>The instance launch group. Launch groups are Spot Instances that launch together and terminate together.</p>',
        'SpotInstanceRequest$AvailabilityZoneGroup' => '<p>The Availability Zone group. If you specify the same Availability Zone group for all Spot Instance requests, all Spot Instances are launched in the same Availability Zone.</p>',
        'SpotInstanceRequest$InstanceId' => '<p>The instance ID, if an instance has been launched to fulfill the Spot Instance request.</p>',
        'SpotInstanceRequest$LaunchedAvailabilityZone' => '<p>The Availability Zone in which the bid is launched.</p>',
        'SpotInstanceRequestIdList$member' => NULL,
        'SpotInstanceStateFault$Code' => '<p>The reason code for the Spot Instance state change.</p>',
        'SpotInstanceStateFault$Message' => '<p>The message for the Spot Instance state change.</p>',
        'SpotInstanceStatus$Code' => '<p>The status code.</p>',
        'SpotInstanceStatus$Message' => '<p>The description for the status code.</p>',
        'SpotPlacement$AvailabilityZone' => '<p>The Availability Zone.</p>',
        'SpotPlacement$GroupName' => '<p>The name of the placement group (for cluster instances].</p>',
        'SpotPrice$SpotPrice' => '<p>The maximum price (bid] that you are willing to pay for a Spot Instance.</p>',
        'SpotPrice$AvailabilityZone' => '<p>The Availability Zone.</p>',
        'StartInstancesRequest$AdditionalInfo' => '<p>Reserved.</p>',
        'StateReason$Code' => '<p>The reason code for the state change.</p>',
        'StateReason$Message' => '<p>The message for the state change.</p> <ul> <li><p><code>Server.SpotInstanceTermination</code>: A Spot Instance was terminated due to an increase in the market price.</p></li> <li><p><code>Server.InternalError</code>: An internal error occurred during instance launch, resulting in termination.</p></li> <li><p><code>Server.InsufficientInstanceCapacity</code>: There was insufficient instance capacity to satisfy the launch request.</p></li> <li><p><code>Client.InternalError</code>: A client error caused the instance to terminate on launch.</p></li> <li><p><code>Client.InstanceInitiatedShutdown</code>: The instance was shut down using the <code>shutdown -h</code> command from the instance.</p></li> <li><p><code>Client.UserInitiatedShutdown</code>: The instance was shut down using the Amazon EC2 API.</p></li> <li><p><code>Client.VolumeLimitExceeded</code>: The volume limit was exceeded.</p></li> <li><p><code>Client.InvalidSnapshot.NotFound</code>: The specified snapshot was not found.</p></li> </ul>',
        'Subnet$SubnetId' => '<p>The ID of the subnet.</p>',
        'Subnet$VpcId' => '<p>The ID of the VPC the subnet is in.</p>',
        'Subnet$CidrBlock' => '<p>The CIDR block assigned to the subnet.</p>',
        'Subnet$AvailabilityZone' => '<p>The Availability Zone of the subnet.</p>',
        'SubnetIdStringList$member' => NULL,
        'Tag$Key' => '<p>The key of the tag. </p> <p>Constraints: Tag keys are case-sensitive and accept a maximum of 127 Unicode characters. May not begin with <code>aws:</code></p>',
        'Tag$Value' => '<p>The value of the tag.</p> <p>Constraints: Tag values are case-sensitive and accept a maximum of 255 Unicode characters.</p>',
        'TagDescription$ResourceId' => '<p>The ID of the resource. For example, <code>ami-1a2b3c4d</code>.</p>',
        'TagDescription$Key' => '<p>The tag key.</p>',
        'TagDescription$Value' => '<p>The tag value.</p>',
        'UnassignPrivateIpAddressesRequest$NetworkInterfaceId' => '<p>The ID of the network interface.</p>',
        'UserData$Data' => NULL,
        'UserGroupStringList$member' => NULL,
        'UserIdGroupPair$UserId' => '<p>The ID of an AWS account.</p>',
        'UserIdGroupPair$GroupName' => '<p>The ID of the security group owned by the specified AWS account.</p>',
        'UserIdGroupPair$GroupId' => '<p>The name of the security group in the specified AWS account.</p>',
        'UserIdStringList$member' => NULL,
        'ValueStringList$member' => NULL,
        'VgwTelemetry$OutsideIpAddress' => '<p>The Internet-routable IP address of the virtual private gateway\'s outside interface.</p>',
        'VgwTelemetry$StatusMessage' => '<p>If an error occurs, a description of the error.</p>',
        'Volume$VolumeId' => '<p>The ID of the volume.</p>',
        'Volume$SnapshotId' => '<p>The snapshot from which the volume was created, if applicable.</p>',
        'Volume$AvailabilityZone' => '<p>The Availability Zone for the volume.</p>',
        'Volume$KmsKeyId' => '<p>The full ARN of the AWS Key Management Service (KMS] master key that was used to protect the volume encryption key for the volume.</p>',
        'VolumeAttachment$VolumeId' => '<p>The ID of the volume.</p>',
        'VolumeAttachment$InstanceId' => '<p>The ID of the instance.</p>',
        'VolumeAttachment$Device' => '<p>The device name.</p>',
        'VolumeIdStringList$member' => NULL,
        'VolumeStatusAction$Code' => '<p>The code identifying the operation, for example, <code>enable-volume-io</code>.</p>',
        'VolumeStatusAction$Description' => '<p>A description of the operation.</p>',
        'VolumeStatusAction$EventType' => '<p>The event type associated with this operation.</p>',
        'VolumeStatusAction$EventId' => '<p>The ID of the event associated with this operation.</p>',
        'VolumeStatusDetails$Status' => '<p>The intended status of the volume status.</p>',
        'VolumeStatusEvent$EventType' => '<p>The type of this event.</p>',
        'VolumeStatusEvent$Description' => '<p>A description of the event.</p>',
        'VolumeStatusEvent$EventId' => '<p>The ID of this event.</p>',
        'VolumeStatusItem$VolumeId' => '<p>The volume ID.</p>',
        'VolumeStatusItem$AvailabilityZone' => '<p>The Availability Zone of the volume.</p>',
        'Vpc$VpcId' => '<p>The ID of the VPC.</p>',
        'Vpc$CidrBlock' => '<p>The CIDR block for the VPC.</p>',
        'Vpc$DhcpOptionsId' => '<p>The ID of the set of DHCP options you\'ve associated with the VPC (or <code>default</code> if the default options are associated with the VPC].</p>',
        'VpcAttachment$VpcId' => '<p>The ID of the VPC.</p>',
        'VpcClassicLink$VpcId' => '<p>The ID of the VPC.</p>',
        'VpcClassicLinkIdList$member' => NULL,
        'VpcIdStringList$member' => NULL,
        'VpcPeeringConnection$VpcPeeringConnectionId' => '<p>The ID of the VPC peering connection.</p>',
        'VpcPeeringConnectionStateReason$Code' => '<p>The status of the VPC peering connection.</p>',
        'VpcPeeringConnectionStateReason$Message' => '<p>A message that provides more information about the status, if applicable.</p>',
        'VpcPeeringConnectionVpcInfo$CidrBlock' => '<p>The CIDR block for the VPC.</p>',
        'VpcPeeringConnectionVpcInfo$OwnerId' => '<p>The AWS account ID of the VPC owner.</p>',
        'VpcPeeringConnectionVpcInfo$VpcId' => '<p>The ID of the VPC.</p>',
        'VpnConnection$VpnConnectionId' => '<p>The ID of the VPN connection.</p>',
        'VpnConnection$CustomerGatewayConfiguration' => '<p>The configuration information for the VPN connection\'s customer gateway (in the native XML format]. This element is always present in the <a>CreateVpnConnection</a> response; however, it\'s present in the <a>DescribeVpnConnections</a> response only if the VPN connection is in the <code>pending</code> or <code>available</code> state.</p>',
        'VpnConnection$CustomerGatewayId' => '<p>The ID of the customer gateway at your end of the VPN connection.</p>',
        'VpnConnection$VpnGatewayId' => '<p>The ID of the virtual private gateway at the AWS side of the VPN connection.</p>',
        'VpnConnectionIdStringList$member' => NULL,
        'VpnGateway$VpnGatewayId' => '<p>The ID of the virtual private gateway.</p>',
        'VpnGateway$AvailabilityZone' => '<p>The Availability Zone where the virtual private gateway was created.</p>',
        'VpnGatewayIdStringList$member' => NULL,
        'VpnStaticRoute$DestinationCidrBlock' => '<p>The CIDR block associated with the local subnet of the customer data center.</p>',
        'ZoneNameStringList$member' => NULL,
        'NewDhcpConfiguration$Key' => NULL,
        'RequestSpotLaunchSpecification$ImageId' => '<p>The ID of the AMI.</p>',
        'RequestSpotLaunchSpecification$KeyName' => '<p>The name of the key pair.</p>',
        'RequestSpotLaunchSpecification$UserData' => '<p>The Base64-encoded MIME user data to make available to the instances.</p>',
        'RequestSpotLaunchSpecification$AddressingType' => '<p>Deprecated.</p>',
        'RequestSpotLaunchSpecification$KernelId' => '<p>The ID of the kernel.</p>',
        'RequestSpotLaunchSpecification$RamdiskId' => '<p>The ID of the RAM disk.</p>',
        'RequestSpotLaunchSpecification$SubnetId' => '<p>The ID of the subnet in which to launch the instance.</p>',
      ],
    ],
    'Subnet' => [
      'base' => '<p>Describes a subnet.</p>',
      'refs' => [
        'CreateSubnetResult$Subnet' => '<p>Information about the subnet.</p>',
        'SubnetList$member' => NULL,
      ],
    ],
    'SubnetIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSubnetsRequest$SubnetIds' => '<p>One or more subnet IDs.</p> <p>Default: Describes all your subnets.</p>',
      ],
    ],
    'SubnetList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSubnetsResult$Subnets' => '<p>Information about one or more subnets.</p>',
      ],
    ],
    'SubnetState' => [
      'base' => NULL,
      'refs' => [
        'Subnet$State' => '<p>The current state of the subnet.</p>',
      ],
    ],
    'SummaryStatus' => [
      'base' => NULL,
      'refs' => [
        'InstanceStatusSummary$Status' => '<p>The status.</p>',
      ],
    ],
    'Tag' => [
      'base' => '<p>Describes a tag.</p>',
      'refs' => [
        'TagList$member' => NULL,
      ],
    ],
    'TagDescription' => [
      'base' => '<p>Describes a tag.</p>',
      'refs' => [
        'TagDescriptionList$member' => NULL,
      ],
    ],
    'TagDescriptionList' => [
      'base' => NULL,
      'refs' => [
        'DescribeTagsResult$Tags' => '<p>A list of tags.</p>',
      ],
    ],
    'TagList' => [
      'base' => NULL,
      'refs' => [
        'ClassicLinkInstance$Tags' => '<p>Any tags assigned to the instance.</p>',
        'ConversionTask$Tags' => NULL,
        'CreateTagsRequest$Tags' => '<p>One or more tags. The <code>value</code> parameter is required, but if you don\'t want the tag to have a value, specify the parameter with no value, and we set the value to an empty string. </p>',
        'CustomerGateway$Tags' => '<p>Any tags assigned to the customer gateway.</p>',
        'DeleteTagsRequest$Tags' => '<p>One or more tags to delete. If you omit the <code>value</code> parameter, we delete the tag regardless of its value. If you specify this parameter with an empty string as the value, we delete the key only if its value is an empty string.</p>',
        'DhcpOptions$Tags' => '<p>Any tags assigned to the DHCP options set.</p>',
        'Image$Tags' => '<p>Any tags assigned to the image.</p>',
        'Instance$Tags' => '<p>Any tags assigned to the instance.</p>',
        'InternetGateway$Tags' => '<p>Any tags assigned to the Internet gateway.</p>',
        'NetworkAcl$Tags' => '<p>Any tags assigned to the network ACL.</p>',
        'NetworkInterface$TagSet' => '<p>Any tags assigned to the network interface.</p>',
        'ReservedInstances$Tags' => '<p>Any tags assigned to the resource.</p>',
        'ReservedInstancesListing$Tags' => '<p>Any tags assigned to the resource.</p>',
        'RouteTable$Tags' => '<p>Any tags assigned to the route table.</p>',
        'SecurityGroup$Tags' => '<p>Any tags assigned to the security group.</p>',
        'Snapshot$Tags' => '<p>Any tags assigned to the snapshot.</p>',
        'SpotInstanceRequest$Tags' => '<p>Any tags assigned to the resource.</p>',
        'Subnet$Tags' => '<p>Any tags assigned to the subnet.</p>',
        'Volume$Tags' => '<p>Any tags assigned to the volume.</p>',
        'Vpc$Tags' => '<p>Any tags assigned to the VPC.</p>',
        'VpcClassicLink$Tags' => '<p>Any tags assigned to the VPC.</p>',
        'VpcPeeringConnection$Tags' => '<p>Any tags assigned to the resource.</p>',
        'VpnConnection$Tags' => '<p>Any tags assigned to the VPN connection.</p>',
        'VpnGateway$Tags' => '<p>Any tags assigned to the virtual private gateway.</p>',
      ],
    ],
    'TelemetryStatus' => [
      'base' => NULL,
      'refs' => [
        'VgwTelemetry$Status' => '<p>The status of the VPN tunnel.</p>',
      ],
    ],
    'Tenancy' => [
      'base' => NULL,
      'refs' => [
        'CreateVpcRequest$InstanceTenancy' => '<p>The supported tenancy options for instances launched into the VPC. A value of <code>default</code> means that instances can be launched with any tenancy; a value of <code>dedicated</code> means all instances launched into the VPC are launched as dedicated tenancy instances regardless of the tenancy assigned to the instance at launch. Dedicated tenancy instances run on single-tenant hardware.</p> <p>Default: <code>default</code></p>',
        'DescribeReservedInstancesOfferingsRequest$InstanceTenancy' => '<p>The tenancy of the Reserved Instance offering. A Reserved Instance with <code>dedicated</code> tenancy runs on single-tenant hardware and can only be launched within a VPC.</p> <p>Default: <code>default</code></p>',
        'Placement$Tenancy' => '<p>The tenancy of the instance (if the instance is running in a VPC]. An instance with a tenancy of <code>dedicated</code> runs on single-tenant hardware.</p>',
        'ReservedInstances$InstanceTenancy' => '<p>The tenancy of the reserved instance.</p>',
        'ReservedInstancesOffering$InstanceTenancy' => '<p>The tenancy of the reserved instance.</p>',
        'Vpc$InstanceTenancy' => '<p>The allowed tenancy of instances launched into the VPC.</p>',
      ],
    ],
    'TerminateInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'TerminateInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'UnassignPrivateIpAddressesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'UnmonitorInstancesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'UnmonitorInstancesResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'UserData' => [
      'base' => NULL,
      'refs' => [
        'ImportInstanceLaunchSpecification$UserData' => '<p>User data to be made available to the instance.</p>',
      ],
    ],
    'UserGroupStringList' => [
      'base' => NULL,
      'refs' => [
        'ModifyImageAttributeRequest$UserGroups' => '<p>One or more user groups. This is only valid when modifying the <code>launchPermission</code> attribute.</p>',
      ],
    ],
    'UserIdGroupPair' => [
      'base' => '<p>Describes a security group and AWS account ID pair for EC2-Classic.</p>',
      'refs' => [
        'UserIdGroupPairList$member' => NULL,
      ],
    ],
    'UserIdGroupPairList' => [
      'base' => NULL,
      'refs' => [
        'IpPermission$UserIdGroupPairs' => '<p>One or more security group and AWS account ID pairs.</p>',
      ],
    ],
    'UserIdStringList' => [
      'base' => NULL,
      'refs' => [
        'ModifyImageAttributeRequest$UserIds' => '<p>One or more AWS account IDs. This is only valid when modifying the <code>launchPermission</code> attribute.</p>',
        'ModifySnapshotAttributeRequest$UserIds' => '<p>The account ID to modify for the snapshot.</p>',
      ],
    ],
    'ValueStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeInternetGatewaysRequest$InternetGatewayIds' => '<p>One or more Internet gateway IDs.</p> <p>Default: Describes all your Internet gateways.</p>',
        'DescribeNetworkAclsRequest$NetworkAclIds' => '<p>One or more network ACL IDs.</p> <p>Default: Describes all your network ACLs.</p>',
        'DescribeRouteTablesRequest$RouteTableIds' => '<p>One or more route table IDs.</p> <p>Default: Describes all your route tables.</p>',
        'DescribeVpcPeeringConnectionsRequest$VpcPeeringConnectionIds' => '<p>One or more VPC peering connection IDs.</p> <p>Default: Describes all your VPC peering connections.</p>',
        'Filter$Values' => '<p>One or more filter values. Filter values are case-sensitive.</p>',
        'NewDhcpConfiguration$Values' => NULL,
        'RequestSpotLaunchSpecification$SecurityGroups' => NULL,
        'RequestSpotLaunchSpecification$SecurityGroupIds' => NULL,
      ],
    ],
    'VgwTelemetry' => [
      'base' => '<p>Describes telemetry for a VPN tunnel.</p>',
      'refs' => [
        'VgwTelemetryList$member' => NULL,
      ],
    ],
    'VgwTelemetryList' => [
      'base' => NULL,
      'refs' => [
        'VpnConnection$VgwTelemetry' => '<p>Information about the VPN tunnel.</p>',
      ],
    ],
    'VirtualizationType' => [
      'base' => NULL,
      'refs' => [
        'Image$VirtualizationType' => '<p>The type of virtualization of the AMI.</p>',
        'Instance$VirtualizationType' => '<p>The virtualization type of the instance.</p>',
      ],
    ],
    'Volume' => [
      'base' => '<p>Describes a volume.</p>',
      'refs' => [
        'VolumeList$member' => NULL,
      ],
    ],
    'VolumeAttachment' => [
      'base' => '<p>Describes volume attachment details.</p>',
      'refs' => [
        'VolumeAttachmentList$member' => NULL,
      ],
    ],
    'VolumeAttachmentList' => [
      'base' => NULL,
      'refs' => [
        'Volume$Attachments' => NULL,
      ],
    ],
    'VolumeAttachmentState' => [
      'base' => NULL,
      'refs' => [
        'VolumeAttachment$State' => '<p>The attachment state of the volume.</p>',
      ],
    ],
    'VolumeAttributeName' => [
      'base' => NULL,
      'refs' => [
        'DescribeVolumeAttributeRequest$Attribute' => '<p>The instance attribute.</p>',
      ],
    ],
    'VolumeDetail' => [
      'base' => '<p>Describes an Amazon EBS volume.</p>',
      'refs' => [
        'DiskImage$Volume' => NULL,
        'ImportVolumeRequest$Volume' => NULL,
      ],
    ],
    'VolumeIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVolumeStatusRequest$VolumeIds' => '<p>One or more volume IDs.</p> <p>Default: Describes all your volumes.</p>',
        'DescribeVolumesRequest$VolumeIds' => '<p>One or more volume IDs.</p>',
      ],
    ],
    'VolumeList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVolumesResult$Volumes' => NULL,
      ],
    ],
    'VolumeState' => [
      'base' => NULL,
      'refs' => [
        'Volume$State' => '<p>The volume state.</p>',
      ],
    ],
    'VolumeStatusAction' => [
      'base' => '<p>Describes a volume status operation code.</p>',
      'refs' => [
        'VolumeStatusActionsList$member' => NULL,
      ],
    ],
    'VolumeStatusActionsList' => [
      'base' => NULL,
      'refs' => [
        'VolumeStatusItem$Actions' => '<p>The details of the operation.</p>',
      ],
    ],
    'VolumeStatusDetails' => [
      'base' => '<p>Describes a volume status.</p>',
      'refs' => [
        'VolumeStatusDetailsList$member' => NULL,
      ],
    ],
    'VolumeStatusDetailsList' => [
      'base' => NULL,
      'refs' => [
        'VolumeStatusInfo$Details' => '<p>The details of the volume status.</p>',
      ],
    ],
    'VolumeStatusEvent' => [
      'base' => '<p>Describes a volume status event.</p>',
      'refs' => [
        'VolumeStatusEventsList$member' => NULL,
      ],
    ],
    'VolumeStatusEventsList' => [
      'base' => NULL,
      'refs' => [
        'VolumeStatusItem$Events' => '<p>A list of events associated with the volume.</p>',
      ],
    ],
    'VolumeStatusInfo' => [
      'base' => '<p>Describes the status of a volume.</p>',
      'refs' => [
        'VolumeStatusItem$VolumeStatus' => '<p>The volume status.</p>',
      ],
    ],
    'VolumeStatusInfoStatus' => [
      'base' => NULL,
      'refs' => [
        'VolumeStatusInfo$Status' => '<p>The status of the volume.</p>',
      ],
    ],
    'VolumeStatusItem' => [
      'base' => '<p>Describes the volume status.</p>',
      'refs' => [
        'VolumeStatusList$member' => NULL,
      ],
    ],
    'VolumeStatusList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVolumeStatusResult$VolumeStatuses' => '<p>A list of volumes.</p>',
      ],
    ],
    'VolumeStatusName' => [
      'base' => NULL,
      'refs' => [
        'VolumeStatusDetails$Name' => '<p>The name of the volume status.</p>',
      ],
    ],
    'VolumeType' => [
      'base' => NULL,
      'refs' => [
        'CreateVolumeRequest$VolumeType' => '<p>The volume type. This can be <code>gp2</code> for General Purpose (SSD] volumes, <code>io1</code> for Provisioned IOPS (SSD] volumes, or <code>standard</code> for Magnetic volumes.</p> <p>Default: <code>standard</code></p>',
        'EbsBlockDevice$VolumeType' => '<p>The volume type. <code>gp2</code> for General Purpose (SSD] volumes, <code>io1</code> for Provisioned IOPS (SSD] volumes, and <code>standard</code> for Magnetic volumes.</p> <p>Default: <code>standard</code></p>',
        'Volume$VolumeType' => '<p>The volume type. This can be <code>gp2</code> for General Purpose (SSD] volumes, <code>io1</code> for Provisioned IOPS (SSD] volumes, or <code>standard</code> for Magnetic volumes.</p>',
      ],
    ],
    'Vpc' => [
      'base' => '<p>Describes a VPC.</p>',
      'refs' => [
        'CreateVpcResult$Vpc' => '<p>Information about the VPC.</p>',
        'VpcList$member' => NULL,
      ],
    ],
    'VpcAttachment' => [
      'base' => '<p>Describes an attachment between a virtual private gateway and a VPC.</p>',
      'refs' => [
        'AttachVpnGatewayResult$VpcAttachment' => '<p>Information about the attachment.</p>',
        'VpcAttachmentList$member' => NULL,
      ],
    ],
    'VpcAttachmentList' => [
      'base' => NULL,
      'refs' => [
        'VpnGateway$VpcAttachments' => '<p>Any VPCs attached to the virtual private gateway.</p>',
      ],
    ],
    'VpcAttributeName' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpcAttributeRequest$Attribute' => '<p>The VPC attribute.</p>',
      ],
    ],
    'VpcClassicLink' => [
      'base' => '<p>Describes whether a VPC is enabled for ClassicLink.</p>',
      'refs' => [
        'VpcClassicLinkList$member' => NULL,
      ],
    ],
    'VpcClassicLinkIdList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpcClassicLinkRequest$VpcIds' => '<p>One or more VPCs for which you want to describe the ClassicLink status.</p>',
      ],
    ],
    'VpcClassicLinkList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpcClassicLinkResult$Vpcs' => '<p>The ClassicLink status of one or more VPCs.</p>',
      ],
    ],
    'VpcIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpcsRequest$VpcIds' => '<p>One or more VPC IDs.</p> <p>Default: Describes all your VPCs.</p>',
      ],
    ],
    'VpcList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpcsResult$Vpcs' => '<p>Information about one or more VPCs.</p>',
      ],
    ],
    'VpcPeeringConnection' => [
      'base' => '<p>Describes a VPC peering connection.</p>',
      'refs' => [
        'AcceptVpcPeeringConnectionResult$VpcPeeringConnection' => '<p>Information about the VPC peering connection.</p>',
        'CreateVpcPeeringConnectionResult$VpcPeeringConnection' => '<p>Information about the VPC peering connection.</p>',
        'VpcPeeringConnectionList$member' => NULL,
      ],
    ],
    'VpcPeeringConnectionList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpcPeeringConnectionsResult$VpcPeeringConnections' => '<p>Information about the VPC peering connections.</p>',
      ],
    ],
    'VpcPeeringConnectionStateReason' => [
      'base' => '<p>Describes the status of a VPC peering connection.</p>',
      'refs' => [
        'VpcPeeringConnection$Status' => '<p>The status of the VPC peering connection.</p>',
      ],
    ],
    'VpcPeeringConnectionVpcInfo' => [
      'base' => '<p>Describes a VPC in a VPC peering connection.</p>',
      'refs' => [
        'VpcPeeringConnection$AccepterVpcInfo' => '<p>The information of the peer VPC.</p>',
        'VpcPeeringConnection$RequesterVpcInfo' => '<p>The information of the requester VPC.</p>',
      ],
    ],
    'VpcState' => [
      'base' => NULL,
      'refs' => [
        'Vpc$State' => '<p>The current state of the VPC.</p>',
      ],
    ],
    'VpnConnection' => [
      'base' => '<p>Describes a VPN connection.</p>',
      'refs' => [
        'CreateVpnConnectionResult$VpnConnection' => '<p>Information about the VPN connection.</p>',
        'VpnConnectionList$member' => NULL,
      ],
    ],
    'VpnConnectionIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpnConnectionsRequest$VpnConnectionIds' => '<p>One or more VPN connection IDs.</p> <p>Default: Describes your VPN connections.</p>',
      ],
    ],
    'VpnConnectionList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpnConnectionsResult$VpnConnections' => '<p>Information about one or more VPN connections.</p>',
      ],
    ],
    'VpnConnectionOptions' => [
      'base' => '<p>Describes VPN connection options.</p>',
      'refs' => [
        'VpnConnection$Options' => '<p>The VPN connection options.</p>',
      ],
    ],
    'VpnConnectionOptionsSpecification' => [
      'base' => '<p>Describes VPN connection options.</p>',
      'refs' => [
        'CreateVpnConnectionRequest$Options' => '<p>Indicates whether the VPN connection requires static routes. If you are creating a VPN connection for a device that does not support BGP, you must specify <code>true</code>.</p> <p>Default: <code>false</code></p>',
      ],
    ],
    'VpnGateway' => [
      'base' => '<p>Describes a virtual private gateway.</p>',
      'refs' => [
        'CreateVpnGatewayResult$VpnGateway' => '<p>Information about the virtual private gateway.</p>',
        'VpnGatewayList$member' => NULL,
      ],
    ],
    'VpnGatewayIdStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpnGatewaysRequest$VpnGatewayIds' => '<p>One or more virtual private gateway IDs.</p> <p>Default: Describes all your virtual private gateways.</p>',
      ],
    ],
    'VpnGatewayList' => [
      'base' => NULL,
      'refs' => [
        'DescribeVpnGatewaysResult$VpnGateways' => '<p>Information about one or more virtual private gateways.</p>',
      ],
    ],
    'VpnState' => [
      'base' => NULL,
      'refs' => [
        'VpnConnection$State' => '<p>The current state of the VPN connection.</p>',
        'VpnGateway$State' => '<p>The current state of the virtual private gateway.</p>',
        'VpnStaticRoute$State' => '<p>The current state of the static route.</p>',
      ],
    ],
    'VpnStaticRoute' => [
      'base' => '<p>Describes a static route for a VPN connection.</p>',
      'refs' => [
        'VpnStaticRouteList$member' => NULL,
      ],
    ],
    'VpnStaticRouteList' => [
      'base' => NULL,
      'refs' => [
        'VpnConnection$Routes' => '<p>The static routes associated with the VPN connection.</p>',
      ],
    ],
    'VpnStaticRouteSource' => [
      'base' => NULL,
      'refs' => [
        'VpnStaticRoute$Source' => '<p>Indicates how the routes were provided.</p>',
      ],
    ],
    'ZoneNameStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeAvailabilityZonesRequest$ZoneNames' => '<p>The names of one or more Availability Zones.</p>',
      ],
    ],
    'NewDhcpConfigurationList' => [
      'base' => NULL,
      'refs' => [
        'CreateDhcpOptionsRequest$DhcpConfigurations' => '<p>A DHCP configuration option.</p>',
      ],
    ],
    'NewDhcpConfiguration' => [
      'base' => NULL,
      'refs' => [
        'NewDhcpConfigurationList$member' => NULL,
      ],
    ],
    'DhcpConfigurationValueList' => [
      'base' => NULL,
      'refs' => [
        'DhcpConfiguration$Values' => '<p>One or more values for the DHCP option.</p>',
      ],
    ],
    'Blob' => [
      'base' => NULL,
      'refs' => [
        'ImportKeyPairRequest$PublicKeyMaterial' => '<p>The public key. You must base64 encode the public key material before sending it to AWS.</p>',
        'S3Storage$UploadPolicy' => '<p>A Base64-encoded Amazon S3 upload policy that gives Amazon EC2 permission to upload items into Amazon S3 on your behalf.</p>',
        'BlobAttributeValue$Value' => NULL,
      ],
    ],
    'BlobAttributeValue' => [
      'base' => NULL,
      'refs' => [
        'ModifyInstanceAttributeRequest$UserData' => '<p>Changes the instance\'s user data to the specified value.</p>',
      ],
    ],
    'RequestSpotLaunchSpecification' => [
      'base' => '<p>Describes the launch specification for an instance.</p>',
      'refs' => [
        'RequestSpotInstancesRequest$LaunchSpecification' => NULL,
      ],
    ],
  ],
];
