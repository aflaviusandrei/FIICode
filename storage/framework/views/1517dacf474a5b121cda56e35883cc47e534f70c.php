<?php $__env->startSection('content'); ?>
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> <?php echo e($title); ?> <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
                <table class="ui celled striped structured table">
                    <tbody>
                    <tr>
                        <td>Inscrieri</td>
                        <td>
                            13 Februarie 2018 - 16 Martie 2018
                        </td>
                        <td>
                            <div id="countbox1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>WEB/Mobile</td>
                        <td>
                            19 Martie, 18:00 - 22 Aprilie, 23:59
                        </td>
                        <td>
                            <div id="countbox2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>GameDev</td>
                        <td>
                            19 Martie 18:00 - 22 Aprilie, 23:59
                        </td>
                        <td>
                            <div id="countbox3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Algoritmică</td>
                        <td>
                            Etapa I: 16-18 Martie<br />
                            Etapa II: 1-2 Aprilie<br />
                            Etapa III: 20 - 22 Aprilie<br />
                        </td>
                        <td>
                            <div id="countbox4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Afisare rezultate</td>
                        <td>
                            30 Aprilie
                        </td>
                        <td>
                            <div id="countbox5"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Finala</td>
                        <td>
                            4 Mai - 6 Mai
                        </td>
                        <td>
                            <div id="countbox6"></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="ui container"></div>
        </div>
    </section>
    <script>
        var CDown = function(messaj) {
            this.state=0;
            this.counts=[];
            this.message = messaj;
            this.interval=null;
        };
        CDown.prototype = {
            init: function(){
                this.state=1;
                var self=this;
                this.interval=window.setInterval(function(){self.tick();}, 1000);
            },
            add: function(date,id){
                this.counts.push({d:date,id:id});
                this.tick();
                if(this.state==0) this.init();
            },
            expire: function(idxs){
                for(var x in idxs) {
                    this.display(this.counts[idxs[x]], this.message);
                    this.counts.splice(idxs[x], 1);
                }
            },
            format: function(r){
                var out="";
                if(r.d != 0){out += r.d +" "+((r.d==1)?"<span>zi</span>":"<span>zile</span>")+"  ";}
                if(r.h != 0){out += r.h +" "+((r.h==1)?"<span>ora</span>":"<span>ore</span>")+"  ";}
                out += r.m +" "+((r.m==1)?"<span>minut</span>":"<span>minute</span>")+"  ";
                out += r.s +" "+((r.s==1)?"<span>secunda</span>":"<span>secunde</span>")+"  ";

                return out.substr(0,out.length-2);
            },
            math: function(work){
                var	y=w=d=h=m=s=ms=0;

                ms=(""+((work%1000)+1000)).substr(1,3);
                work=Math.floor(work/1000);

                y=Math.floor(work/31536000);
                w=Math.floor(work/604800);
                d=Math.floor(work/86400);
                work=work%86400;

                h=Math.floor(work/3600);
                work=work%3600;

                m=Math.floor(work/60);
                work=work%60;

                s=Math.floor(work);

                return {y:y,w:w,d:d,h:h,m:m,s:s,ms:ms};
            },
            tick: function(){
                var now=(new Date()).getTime(),
                        expired=[],cnt=0,amount=0;

                if(this.counts)
                    for(var idx=0,n=this.counts.length; idx<n; ++idx){
                        cnt=this.counts[idx];
                        amount=cnt.d.getTime()-now;
                        if(amount<0){
                            expired.push(idx);
                        }
                        else{
                            this.display(cnt, this.format(this.math(amount)));
                        }
                    }

                // deal with any expired
                if(expired.length>0) this.expire(expired);

                // if no active counts, stop updating
                if(this.counts.length==0) window.clearTimeout(this.interval);

            },
            display: function(cnt,msg){
                document.getElementById(cnt.id).innerHTML=msg;
            }
        };

        window.onload=function(){
            var cdown1 = new CDown("Inscrierile au inceput!");
            cdown1.add(new Date(2017,0,17,0,16,8), "countbox1");

            var cdown2 = new CDown("Etapa tehnologiior web e in desfasurare.");
            cdown2.add(new Date(2017,2,26,18,0,0), "countbox2");

            var cdown3 = new CDown("Etapa de game development e in desfasurare.");
            cdown3.add(new Date(2017,2,26,18,0,0), "countbox3");

            var cdown4 = new CDown("Etapa de algoritmica e in desfasurare.");
            cdown4.add(new Date(2017,2,26,18,0,0), "countbox4");

            var cdown5 = new CDown("Rezultatele vor fii afisate in curand.");
            cdown5.add(new Date(2017,3,30,18,0,0), "countbox5");

            var cdown6 = new CDown("Etapa finala a inceput :). Good luck!");
            cdown6.add(new Date(2017,4,5,18,0,0), "countbox6");
        };
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>