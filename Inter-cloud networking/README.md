Consider connectivity between multiple VPCs in each of AWS and GCP regions within Europe.
- What is/are a high-level design you would recommend, primary and secondary?

```
I would recommend architecting the high-level design considering the following points:

- Deploying through a pipeline chaining through repository push > build > test > deploy
- Integrated testing, code reviews before deploy
- Provisioning through IaaC
- Computing requirements
- Storage
- Security
- Network Infrastructure - Gateways, loadbalancers, NAT, firewalls, IP ranges
- Monitoring and logging with alerts to support/dev team
- Decision to go on managed services instead of clusters
- Dedicated DevOps team to manage
- Updation, maintanence, rollbacks and tests strategy

For the VPCs within Europe: 
- The EU GDPR would apply
- The rage of datacenters can be within EU running in EU timezone
```

- What connectivity limitations (if any) are applicable to a SAAS provider operating a multi-cloud
application?

```
Users: No of users in SAAS environment, can increase depending on the requirements and it jas to be managed since it would eventually impact cost

Security: Data and security of application connected entities would require monitoring and update from time to time
Upgrade: Technology update and upgrade has be in sync to enable the integrated services to work In parallel

Network: Network becomes dependency since whole business relies on connectivity and liveness

Authorization: Role based authentication can become a hassle for new teams or if bulk users have to be managed. This leads to no of users, time of usage, resource usage is proportional to cost if the cost is per usage basis 
```

- What are the requirements for seamless connectivity between instances across clouds (private
IP <==> private IP communications)

```
The requirements are as follows:
- Routing through a Gateway
- Define an IP range or elastic IP address and routing thorugh iptable - not nessasary but to tighten the security
- Subnets creation in both private and public
- Hardware VPN access for static IPs
- Usage of network address translation if possible
  
The above lists all of the networking abilities the cloud VPC can have, we can choose the best suited depending on the density of connections we establish
```