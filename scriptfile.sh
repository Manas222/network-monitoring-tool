/usr/sbin/tcpdump -ne -c 500 -i wlp6s0 > /var/www/html/packet.txt

grep "ARP" packet.txt>arp.txt
grep "UDP" packet.txt>udp.txt
grep "TCP" packet.txt>tcp.txt

cut -d" " -f1 arp.txt>arptimestamp.txt
cut -d" " -f2 arp.txt>arpsourcemac.txt
cut -d" " -f4 arp.txt>arpdestinationmac.txt
cut -d" " -f12 arp.txt>arpsourceip.txt
cut -d" " -f14 arp.txt>arpdestinationip.txt
cut -d" " -f16 arp.txt>arplenght.txt

paste arptimestamp.txt arpsourcemac.txt arpdestinationmac.txt arpsourceip.txt arpdestinationip.txt arplenght.txt>arpall.txt

cut -d" " -f1 udp.txt>udptimestamp.txt
cut -d" " -f2 udp.txt>udpsourcemac.txt
cut -d" " -f4 udp.txt>udpdestinationmac.txt
cut -d" " -f10 udp.txt>udpsip.txt
cut -d"." -f1,2,3,4 udpsip.txt>udpsourceip.txt
cut -d"." -f5 udpsip.txt>udpsourceport.txt
cut -d" " -f12 udp.txt>udpdip.txt
cut -d"." -f1,2,3,4 udpsip.txt>udpdestinationip.txt
cut -d"." -f5 udpdip.txt>udpdestinationport.txt
cut -d" " -f15 udp.txt>udplenght.txt

paste udptimestamp.txt udpsourcemac.txt udpdestinationmac.txt udpsourceip.txt udpsourceport.txt udpdestinationip.txt udpdestinationport.txt udplenght.txt>udpall.txt

cut -d" " -f1 tcp.txt>tcptimestamp.txt
cut -d" " -f2 tcp.txt>tcpsourcemac.txt
cut -d" " -f4 tcp.txt>tcpdestinationmac.txt
cut -d" " -f10 tcp.txt>tcpsip.txt
cut -d"." -f1,2,3,4 tcpsip.txt>tcpsourceip.txt
cut -d"." -f5 tcpsip.txt>tcpsourceport.txt
cut -d" " -f2 tcp.txt>tcpdip.txt
cut -d"." -f1,2,3,4 tcpdip.txt>tcpdestinationip.txt
cut -d"." -f5 tcpdip.txt>tcpdestinationport.txt
cut -d" " -f9 tcp.txt>tcplenght.txt

paste tcptimestamp.txt tcpsourcemac.txt tcpdestinationmac.txt tcpsourceip.txt tcpsourceport.txt tcpdestinationip.txt tcpdestinationport.txt tcplenght.txt>tcpall


