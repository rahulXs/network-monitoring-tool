#!/bin/sh
tcpdump -ne -c 100 -i any -x > packet
grep -w "ARP" packet > arp

cut -d" " -f1 arp > arp_time
cut -d" " -f2 arp > arp_smac
cut -d" " -f4 arp > arp_dmac
cut -d" " -f8-9 arp | cut -d':' -f1 > arp_length
cut -d" " -f14 arp > arp_sip
cut -d" " -f12 arp > arp_dip



grep "IPv4" packet > ip4
grep "IPv6" packet > ip6
grep "UDP" packet > udp



cut -d" " -f1 udp > udp_time
cut -d" " -f2 udp > udp_smac
cut -d" " -f4 udp > udp_dmac
cut -d" " -f8-9 udp | cut -d':' -f1 > udp_length
cut -d" " -f10 udp | cut -d"." -f1-4 > udp_sip
cut -d" " -f10 udp | cut -d"." -f5 > udp_sp
cut -d" " -f12 udp | cut -d"." -f1-4 > udp_dip
cut -d" " -f12 udp | cut -d"." -f5 | cut -d':' -f1> udp_dp


cut -d" " -f1 ip4 > ip4_time
cut -d" " -f2 ip4 > ip4_smac
cut -d" " -f4 ip4 > ip4_dmac
cut -d" " -f8-9 ip4 | cut -d':' -f1 > ip4_length
cut -d" " -f10 ip4 | cut -d"." -f1-4 > ip4_sip
cut -d" " -f10 ip4 | cut -d"." -f5 > ip4_sp
cut -d" " -f12 ip4 | cut -d"." -f1-4 > ip4_dip
cut -d" " -f12 ip4 | cut -d"." -f5 | cut -d':' -f1 > ip4_dp


cut -d" " -f1 ip6 > ip6_time
cut -d" " -f2 ip6 > ip6_smac
cut -d" " -f4 ip6 > ip6_dmac
cut -d" " -f8-9 ip6 > ip6_length
cut -d" " -f10 ip6 | cut -d"." -f1 > ip6_sip
cut -d" " -f10 ip6 | cut -d"." -f2 > ip6_sp
cut -d" " -f12 ip6 | cut -d"." -f1 > ip6_dip
cut -d" " -f12 ip6 | cut -d"." -f2 > ip6_dp


