using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;

namespace Autókereskedés
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        

        private void megnyitásToolStripMenuItem_Click(object sender, EventArgs e)
        {
            OpenFileDialog nyit = new OpenFileDialog();
            nyit.Filter = "*.txt | *.txt";
            nyit.ShowDialog();
            filename = nyit.FileName;
            foreach (var item in File.ReadAllLines(filename))
            {
                listBox1.Items.Add(item);
            }
        }
        string filename = "";
        private void mentésToolStripMenuItem_Click(object sender, EventArgs e)
        {
            try
            {
                if (filename!="")
                {
                    StreamWriter sw = new StreamWriter(filename);
                    SaveFileDialog ment = new SaveFileDialog();
                    foreach(var item in listBox1.Items)
                    {
                        sw.WriteLine(item);
                    }
                    sw.Close();
                }
            }
            catch (Exception)
            {

                MessageBox.Show("Nem!");
            }
            
        }

        private void Addb_Click(object sender, EventArgs e)
        {
            try
            {
                string marka = textBox1.Text;
                string tipus = textBox2.Text;
                int ev = Convert.ToInt32(textBox3.Text);
                string szin = textBox4.Text;
                string rendszam = textBox5.Text;
                listBox1.Items.Add(marka + ";" + tipus + ";" + ev + ";" + szin + ";" + rendszam);
                
            }
            catch (Exception)
            {
               
                MessageBox.Show("Valami üres vagy rossz formátum!");
            }
                  }

        private void Deleteb_Click(object sender, EventArgs e)
        {
            listBox1.Items.Clear();
        }

        private void kilépésToolStripMenuItem_Click(object sender, EventArgs e)
        {
            
        }
    }
}
